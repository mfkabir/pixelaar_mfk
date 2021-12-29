<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
// use Buzz\Browser;
// use Buzz\Client\FileGetContents;
// use Nyholm\Psr7\Factory\Psr17Factory;

class DashboardController extends Controller
{
    public function index()
    {
        $return_data = [
            'name' => '',
            'active_installs' => 0,
            'downloaded' => 0,
            'downloads_per_day' => [],
            'chart_data' => [],
            'graph_data' => [],
            'activation_rate' => 0,
            'start_date' => '',
            'end_date' => '',
            'select_items' => [
                [
                    'name' => 'Please select',
                    'value' => ''
                ],
                [
                    'name' => 'WooCommerce',
                    'value' => 'woocommerce'
                ],
                [
                    'name' => 'Contact-Form-7',
                    'value' => 'contact-form-7'
                ],
                [
                    'name' => 'Classic Editor',
                    'value' => 'classic-editor'
                ],
                [
                    'name' => 'Yoast SEO',
                    'value' => 'wordpress-seo'
                ],
            ],
            'selected' => ''
        ];

        return view('dashboard', ['plugin_data' => $return_data]);
    }

    public function setRedisData($plugin_name, $start_date, $end_date)
    {
        $return_data['start_date'] = $start_date;
        $return_data['end_date'] = $end_date;
        $response2 = json_decode(file_get_contents('https://api.wordpress.org/plugins/info/1.2/?action=plugin_information&request[slug]='.$plugin_name), true);
        $return_data['name'] = $response2['name'];
        $return_data['active_installs'] = $response2['active_installs'];

        $response3 = json_decode(file_get_contents('https://api.wordpress.org/plugins/info/1.0/'.$plugin_name.'.json?fields=-added,-compatibility,-screenshots,-versions,-description,-download_link,-donate_link,-homepage,-last_updated,-rating,-ratings,-requires,-requires_php,-sections,-short_description,-tags,-tested,-icons,-active_installs,-banners,-reviews,-contributors'), true);
        $return_data['downloaded'] = $response3['downloaded'];

        $response4 = json_decode(file_get_contents('https://api.wordpress.org/stats/plugin/1.0/downloads.php?slug='.$plugin_name.'&limit=266'), true);
        $return_data['downloads_per_day'] = $response4;

        $response5 = json_decode(file_get_contents('https://api.wordpress.org/stats/plugin/1.0/active-installs.php?slug='.$plugin_name.'&limit=266'), true);
        $return_data['chart_data'] = $response5;
        $return_data['activation_rate'] = number_format(($return_data['active_installs'] / $return_data['downloaded'])*100, 1);

        if($start_date != null && $end_date != null){
            $new_start_date = date("Y-m-d", strtotime($start_date));
            $new_end_date = date("Y-m-d", strtotime($end_date));
            $new_dl = 0;

            foreach ($return_data['downloads_per_day'] as $key => $value) {
                if ($key >= $new_start_date && $key <= $new_end_date) {
                    $new_dl += (int)$value;
                }
            }

            // dd($new_dl);

            $return_data['downloaded'] = $new_dl;
        }

        foreach($return_data['chart_data'] as $key => $value){
            $return_data['graph_data'][] = [
                'date' => date('M j Y', strtotime($key)),
                'value' => (float)$value,
            ];
        }
        // dd($return_data);
        Cache::put('plugin_' . $plugin_name, json_encode($return_data));

        return $return_data;
    }

    public function getdata(Request $request)
    {
        $return_data = [];
        $validated = $request->validate([
            'plugin-name' => 'required'
        ]);
        $start_date = $request->input('from-date');
        $end_date = $request->input('to-date');
        $plugin_name = $validated['plugin-name'];
        
        // dd($return_data);
        
        $cachedPlugin = Cache::get('plugin_' . $plugin_name);

        if(isset($cachedPlugin)) {
            $return_data = json_decode($cachedPlugin, true);
            if($return_data['start_date'] != $start_date || $return_data['end_date'] != $end_date){
                $return_data = $this->setRedisData($plugin_name, $start_date, $end_date);
            }
            // return response()->json([
            //     'status_code' => 201,
            //     'message' => 'Fetched from redis',
            //     'data' => $plugin,
            // ]);
        }else {
            
            $return_data = $this->setRedisData($plugin_name, $start_date, $end_date);
            // return response()->json([
            //     'status_code' => 201,
            //     'message' => 'Fetched from api',
            //     'data' => $return_data,
            // ]);
        }
        
        $return_data['select_items'] = [
            [
                'name' => 'Please select',
                'value' => ''
            ],
            [
                'name' => 'WooCommerce',
                'value' => 'woocommerce'
            ],
            [
                'name' => 'Contact-Form-7',
                'value' => 'contact-form-7'
            ],
            [
                'name' => 'Classic Editor',
                'value' => 'classic-editor'
            ],
            [
                'name' => 'Yoast SEO',
                'value' => 'wordpress-seo'
            ],
        ];

        $return_data['selected'] = $plugin_name;
        
        // dd($return_data);

        return view('dashboard', ['plugin_data' => $return_data]);        
    }
}

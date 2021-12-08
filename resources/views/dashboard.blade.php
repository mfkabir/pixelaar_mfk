<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">                
                <div class="cp-6 bg-white border-b border-gray-200">
                    <form class="row g-3" action="" method="post">
                        @csrf
                        <div class="col-auto">
                            <input type="text" class="form-control from-date" name="from-date" placeholder="Start Date" value="">
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control to-date" name="to-date" placeholder="End Date" value="">
                        </div>
                        <div class="col-auto">
                            <select class="form-select" name="plugin-name" aria-label="Default select example">
                                <option value="">Select item</option>
                                <option value="woocommerce">WooCommerce</option>
                                <option value="contact-form-7">Contact-Form-7</option>
                                <option value="classic-editor">Classic Editor</option>
                                <option value="wordpress-seo">Yoast SEO</option>                                
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Search</button>
                        </div>
                    </form>
                </div>               
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-1p">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="cp-6 bg-white border-b border-gray-200">
                    <div class="mb-3 row">
                        <label for="plugin_title" class="col-md-2 col-form-label">Plugin: </label>
                        <div class="col-md-4">
                            <span readonly class="form-control-plaintext" id="plugin_title">WooCommerce</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-1p">
            <div class="g-3 row">
                <div class="col-md-3">
                    <a href="#" class="card bg-danger h-150px">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="d-flex flex-column">
                                <div class="text-white fw-bolder fs-1 mb-0 mt-5">72.2%</div>
                                <div class="text-white fw-bold fs-6">Activation Rate</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="card bg-body h-150px">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column py-6 px-6">
                            <div class="d-flex flex-column flex-grow-1 mb-5">
                                <span class="text-gray-500 fw-bold me-2 fs-7">Deactivation Rate</span>
                                <span class="fw-bolder fs-1 text-gray-900">0.0%</span>
                            </div>
                            <div class="progress h-7px bg-info bg-opacity-25">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end:: Body-->
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="card h-150px bgi-no-repeat bgi-size-cover" style="background-image:url('{{ asset('images/img-12.jpg') }}')">
                        <!--begin::Body-->
                        <div class="card-body p-6">
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 mb-5">
                                <span class="text-gray-500 fw-bold me-2 fs-7">Activated</span>
                                <span class="fw-bolder fs-1 text-gray-900">76543222</span>
                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="#" class="card bg-primary h-150px">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between">
                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="black"></path>
                                    <path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="d-flex flex-column">
                                <div class="text-white fw-bolder fs-1 mb-0 mt-5">0</div>
                                <div class="text-white fw-bold fs-6">Deactivated</div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-1p">
            <div class="g-3 row">
                <div class="col-md-6">
                    <label class="form-label">Active Install</label>
                    <div class="form-control">
                        <div class="mb-3 row">
                            <label for="plugin_title" class="col-md-6 col-form-label">WooCommerce: </label>
                            <div class="col-md-4">
                                <span readonly class="form-control-plaintext" id="plugin_title">394857664</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Downloads</label>
                    <div class="form-control">
                        <div class="mb-3 row">
                            <label for="plugin_title" class="col-md-6 col-form-label">WooCommerce: </label>
                            <div class="col-md-4">
                                <span readonly class="form-control-plaintext" id="plugin_title">6785944430</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-1p">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="cp-6 bg-white border-b border-gray-200">
                    <div class="col-md-12">
                        <div id="chartdiv"></div>
                    </div>
                </div>
            </div>            
        </div>
    </div>

    @push('custom-scripts')
        <script>

            $('.from-date').datepicker({
                format: "dd/mm/yyyy",
                todayHighlight:'TRUE',
                autoclose: true,
            });
            $('.to-date').datepicker({
                format: "dd/mm/yyyy",
                todayHighlight:'TRUE',
                autoclose: true,
            });

            // Setup
            const yLines = [{
                val: 1,
                color: 'green'
            },
            {
                val: 1.8,
                color: 'yellow'
            },
            {
                val: -1.8,
                color: 'red'
            }
            ]

            const margin = {
            top: 10,
            right: 80,
            bottom: 60,
            left: 20
            };

            const strokeWidth = 3;
            const pointRadius = 4;
            const svgWidth = 1000;
            const svgHeight = 500;
            const width = svgWidth - margin.left - margin.right;
            const height = svgHeight - margin.top - margin.bottom;
            var aspect = width / height;
            const stroke = '#2990ea'; // blue
            const areaFill = 'rgba(41,144,234,0.1)'; // lighter blue
            const format = d3.time.format("%b %e %Y");

            const valueFn = function(d) {
                return d.value
            };
            const dateFn = function(d) {
                return format.parse(d.date)
            };

            // select the div and append svg to it
            const graph = d3.select('#chartdiv').append('svg')
            .attr('width', width + margin.left + margin.right)
            .attr('height', height + margin.top + margin.bottom)
            .style('overflow', 'visible');

            const chartd = d3.select('#chartdiv');
            d3.select(window)
                .on("resize", function() {
                    var targetWidth = chartd.node().getBoundingClientRect().width;
                    chart.attr("width", targetWidth);
                    chart.attr("height", targetWidth / aspect);
                });

            const transformGroup = graph.append('g')
            .attr('tranform', `translate(${margin.left}, ${margin.right})`)

            // Make a group for yLines
            const extraLines = transformGroup.append('g')
            .attr('class', 'extra-lines')

            // Generate some dummy data
            const getData = function() {
            let JSONData = [];
            for (var i = 0; i < 30; i++) {
                JSONData.push({
                "date": moment().add(i, 'days').format('MMM D YYYY'),
                "value": Math.floor(Math.random() * (Math.floor(Math.random() * 20))) - 10
                })
            }
            return JSONData.slice()
            }

            const drawGraph = function(data) {

            console.log(data)

            // Setup y scale
            const y = d3.scale.linear()
                .domain(d3.extent(data.map((d) => d.value)))
                .range([height, 0]);

            // Setup x scale
            const x1 = d3.scale.linear()
                .domain(d3.extent(data.map((d) => d.date)))
                .range([10,390]);
            
            // Setup x axis
            const xAxis = d3.svg.axis()
                .scale(x1)
                .orient("bottom")
                .ticks(10)
                .tickSize(0, 0, 0)
            // console.log(xAxis);

            // Setup y axis
            const yAxis = d3.svg.axis()
                .scale(y)
                .orient("left")
                .ticks(10)
                .tickSize(0, 0, 0)
            
            // append group & call xAxis
            transformGroup.append("g")
                .classed("x axis", true)
                .attr("transform", "translate(" + 0 + "," + (height + 2) + ")")
                .call(xAxis)
                .selectAll("text")
                .classed("x-axis-label", true)
                .style("text-anchor", "start")
                .attr("dx", 8)
                .attr("dy", 10)
                .attr("transform", "rotate(45)")
                .style("font-size", "12px");

            // append group & call yAxis
            transformGroup.append("g")
                .attr("class", "y axis")
                .attr("transform", "translate(" + margin.left + ",0)")
                .call(yAxis);

            // Draw extra coloured lines from yLines array
            extraLines.selectAll('.extra-line')
                .data(yLines)
                .enter()
                .append('line')
                .attr('class', 'extra-line')
                .attr('x1', margin.left)
                .attr('x2', svgWidth - margin.right)
                .attr('stroke', d => d.color)
                .attr('y1', d => y(+d.val))
                .attr('y2', d => y(+d.val))
                .attr('stroke-width', strokeWidth)
                .attr('opacity', 0.5)


            // Setup x scale
            const x = d3.time.scale()
                .domain(d3.extent(data, dateFn))
                .range([0, width])

            // function for filling area under chart
            const area = d3.svg.area()
                .x(d => x(format.parse(d.date)))
                .y0(height)
                .y1(d => y(d.value))

            // function for drawing line
            const line = d3.svg.line()
                .x(d => x(format.parse(d.date)))
                .y(d => y(d.value))

            const lineStart = d3.svg.line()
                .x(d => x(format.parse(d.date)))
                .y(d => y(0))

            // make the line
            transformGroup.append('path')
                .attr('stroke', stroke)
                .attr('stroke-width', strokeWidth)
                .attr('fill', 'none')
                .attr('transform', `translate(${margin.left}, ${margin.top})`)
                .attr('d', lineStart(data))
                .attr('d', line(data))

            // fill area under the graph
            transformGroup.append("path")
                .datum(data)
                .attr("class", "area")
                .attr('fill', areaFill)
                .attr('transform', `translate(${margin.left}, ${margin.top})`)
                .attr('d', lineStart(data))
                .attr("d", area)
            }

            drawGraph(getData())
        </script>
    @endpush
</x-app-layout>

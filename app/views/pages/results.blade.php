@extends("home.layout")
@section('styles')

@stylesheets('leaflet')
<style>
    svg {
        display: block;
    }
    .mypiechart {
        width: 500px;
        border: 2px;
    }

    #chartnn svg{
        height:400px;
        width:100%;
        /*
        margin: 10px;
        Minimum height and width is a good idea to prevent negative SVG dimensions...
        For example width should be =< margin.left + margin.right + 1,
        of course 1 pixel for the entire chart would not be very useful, BUT should not have errors
        */
    }
</style>
@stop
@section("content")



<div id="content">
    <div class="container" id="about">
        <div class="row">
            <!-- sidebar -->
            <div class="span3 sidebar">
                <div class="section-menu">
                    <ul class="nav nav-list">
                        <li class="nav-header">In This Section</li>
                        <li class="active"><a href="#" class="first">Data Results <small>View Data Statistics... </small><i class="icon-angle-right"></i></a></li>
                        <!--                        <li><a href="team.htm">The Team <small>Our team of stars</small><i class="icon-angle-right"></i></a></li>-->
                        <!--                        <li><a href="contact.htm">Contact Us<small>How to get in touch</small><i class="icon-angle-right"></i></a></li>-->
                    </ul>
                </div>
                <div>
                    <div class="map" id="map" style="height: 300px"></div>
                    <h5>Asides:</h5>


                        <blockquote>
                            <p>Kenya's Poverty Headcount Ratio is at 45.9% (<i>World Bank</i>)</p>

                   </blockquote>
                    <blockquote>
                        <p>Kenya's Government is undertaking Rural Development.(<i>Kenya Govt.</i>)</p>

                    </blockquote>

                </div>
            </div>

            <!--main content-->

            <div class="span9">
                <h2 class="title-divider"><span>Data Analysis <span class="de-em">Results</span></span> <small>Select Counties Whose Data To Analyse...</small></h2>

                <div id="chartnn" class='with-3d-shadow with-transitions'>
                    <svg></svg>
                </div>

                <h3>Data Results:</h3>
                <?php
                $d;
                if(isset($countyData["poverty"])){
                    $d = $countyData["poverty"];
                }
                else if($countyData["education"]){
                    $d = $countyData["education"];
                }
                else if($countyData["morbidity"]){
                    $d=$countyData["morbidity"];
                }


                ?>
                <?php $count=0 ?>


                @foreach($d as $county)

                <div class="row" style="padding-left: 40px;">
                <h4>{{$county->county}}</h4>
                <div class="span3" style="height: 250px;">
                    <svg id="test{{$county->id}}" class="mypiechart"></svg>
                    <script>
                        var testdata{{$county->id}} = [
                            {
                                key: "Below Poverty Line",
                                y: {{$county->poverty_level}}
                            },
                            {
                                key: "Above Poverty Line",
                                y: {{100-$county->poverty_level}}
                            },
                        ];


                        nv.addGraph(function() {
                            var width = 200,
                                height = 200;

                            var chart = nv.models.pieChart()
                                .x(function(d) { return d.key })
                                .y(function(d) { return d.y })
                                .color(d3.scale.category10().range())
                                .width(width)
                                .height(height);

                            d3.select("#test{{$county->id}}")
                                .datum(testdata{{$county->id}})
                                .transition().duration(1200)
                                .attr('width', width)
                                .attr('height', height)
                                .call(chart);

                            chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

                            return chart;
                        });

                    </script>

                </div>
                <div class="span5" style="float:right">
                <h5>Information:</h5>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Statistic
                            </th>
                            <th>
                                Figures
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                           <td>
                               Total Population
                           </td>
                            <td>
                                {{$county->population}}
                            </td>
                        </tr>
                       @if(isset($countyData["poverty"]))
                        <tr
                            <?php
                            if($county->poverty_level>=45) {
                                echo "class='warning'";
                            }
                            else if($county->poverty_level<45){
                                echo "class = 'success'";
                            }
                            ?>
                            >
                            <td>
                                Poor Population (%age)
                            </td>
                            <td>
                                {{$county->poverty_level}}%
                            </td>
                        </tr>
                        @endif
                        @if(isset($countyData["education"]))
                        <tr
                            <?php
                            if(trim($countyData["education"][$count]->pnever_attended,'%')>=20) {
                                echo "class='error'";
                            }
                            else if(trim($countyData["education"][$count]->pnever_attended,'%')<20){
                                echo "class = 'success'";
                            }
                            ?>
                            >
                            <td>
                                Lack of School Attendance (%age)
                            </td>
                            <td>
                                {{$countyData["education"][$count]->pnever_attended}}

                            </td>
                        </tr>
                        @endif

                        @if(isset($countyData["morbidity"]))
                        <tr <?php
                        if(trim($countyData["morbidity"][$count]->morbidity_all,'%')>=40) {
                          echo "class='error'";
                        }
                        else if(trim($countyData["morbidity"][$count]->morbidity_all,'%')<40){
                            echo "class = 'success'";
                        }
                        ?>
                            >
                            <td>
                                Morbidity (%age)
                            </td>
                            <td>

                                {{$countyData["morbidity"][$count]->morbidity_all}}
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    </table>

                </div>

                </div>
                <hr>
                <?php $count++; ?>
                @endforeach


            </div>
        </div>
    </div>
</div>

<script>

    /* Inspired by Lee Byron's test data generator. */
    function stream_layers(n, m, o) {
        if (arguments.length < 3) o = 0;
        function bump(a) {
            var x = 1 / (.1 + Math.random()),
                y = 2 * Math.random() - .5,
                z = 10 / (.1 + Math.random());
            for (var i = 0; i < m; i++) {
                var w = (i / m - y) * z;
                a[i] += x * Math.exp(-w * w);
            }
        }
        return d3.range(n).map(function() {
            var a = [], i;
            for (i = 0; i < m; i++) a[i] = o + o * Math.random();
            for (i = 0; i < 5; i++) bump(a);
            return a.map(stream_index);
        });
    }

    /* Another layer generator using gamma distributions. */
    function stream_waves(n, m) {
        return d3.range(n).map(function(i) {
            return d3.range(m).map(function(j) {
                var x = 20 * j / m - i / 3;
                return 2 * x * Math.exp(-.5 * x);
            }).map(stream_index);
        });
    }

    function stream_index(d, i) {
        return {x: i, y: Math.max(0, d)};
    }



    var tabulardata2 = [

        @if(isset($countyData["poverty"]))
        {
            key:"Poverty Level",
            values:[
    @foreach($countyData["poverty"] as $county)


    {
        x:"{{$county->county}}",
            y:{{$county->poverty_level}}
    },
    @endforeach
    ]
    },
    @endif
    @if(isset($countyData["morbidity"]))
    {
        key:"Morbidity",
            values:[
    @foreach($countyData["morbidity"] as $county)
        {
            x:"{{$county->county}}",
                y:{{rtrim($county->morbidity_all,'%');}}
        },
    @endforeach
    ]
    },
    @endif

    @if(isset($countyData["education"]))
    {
        key:"Education",
            values:[
    @foreach($countyData["education"] as $county)
        {
            x:"{{$county->county}}",
                y:{{rtrim($county->pnever_attended,'%');}}
        },
    @endforeach
    ]
    },
    @endif


    ];
 //  console.log(exampleData());

    nv.addGraph(function() {
             var chart = nv.models.multiBarChart();

//             chart.xAxis
//                 .tickFormat(d3.format(',f'));

             chart.yAxis
                 .tickFormat(d3.format(',.1f'));

             d3.select('#chartnn svg')
                 .datum(tabulardata2)
               .transition().duration(500).call(chart);

             nv.utils.windowResize(chart.update);

            return chart;
         });




     function exampleData() {
           return stream_layers(3,10+Math.random()*100,.1).map(function(data, i) {
                 return {
                       key: 'Stream' + i,
                       values: data
                };
           });
     }




</script>

@stop
@section('scripts')

@javascripts('leaflet')

@stop
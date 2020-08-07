@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    <div class="row " style="margin-top: 47px">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Hi Fasih ! Welcome</div>


            </div>

        </div>

    </div>

<div class="row">
    <div class="col-lg-4 ">
            <div class="stat-box" >
                <!--<div class="" style="width: 18rem; height: 150px;" >

                </div> -->
                <h3>{{$Events['total_events']}}</h3>
                <h4>Total Events</h4>



            </div>
    </div>

    <div class="col-lg-4 ">
        <div class="stat-box2" style="background-image: url('images/logo.png')" >
            <!--<div class="" style="width: 18rem; height: 150px;" >

            </div> -->
            <h3>{{$Revenue['total_Revenue']}}</h3>
            <h4>Total Revenue</h4>



        </div>
    </div>

    <div class="col-lg-4 ">

            <div class="stat-box3" >
                <!--<div class="" style="width: 18rem; height: 150px;" >

                </div> -->
                <h3>{{$Events['total_events']}}</h3>
                <h4>Tickets Sold</h4>



            </div>

</div>
</div>

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-offset-4">--}}
{{--    <div class="elegant-calendar " >--}}
{{--        <p id="reset">reset</p>--}}
{{--        <div id="header" class="clearfix">--}}
{{--            <div class="pre-button"><</div>--}}
{{--            <div class="head-info">--}}
{{--                <div class="head-day"></div>--}}
{{--                <div class="head-month"></div>--}}
{{--            </div>--}}
{{--            <div class="next-button">></div>--}}
{{--        </div>--}}
{{--        <table id="calendar">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Sun</th>--}}
{{--                <th>Mon</th>--}}
{{--                <th>Tue</th>--}}
{{--                <th>Wed</th>--}}
{{--                <th>Thu</th>--}}
{{--                <th>Fri</th>--}}
{{--                <th>Sat</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<br>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Total Events</h4>
                </div>
                <div class="panel-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Users Registerd</h4>
                </div>
                <div id="chart2" class="panel-body">
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Area Series</h4>
                    </div>
                    <div class="panel-body">
                        <div id="chart3"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>StepLine Series</h4>
                    </div>
                    <div id="chart4" class="panel-body">
                    </div>
                </div>
            </div>
        </div>


<script type="text/javascript">
    jQuery(function ($) {
        var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];
        var data2 = [3, 9, 12, 14, 22, 32, 45, 12, 67, 45, 55, 7];
        var data3 = [23, 19, 11, 134, 242, 352, 435, 22, 637, 445, 555, 57];
        var data4 = [13, 19, 112, 114, 212, 332, 435, 132, 67, 45, 55, 7];

        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "line",
                data: data1
            }]
        });

        $("#chart2").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "polarbar",
                data: data2
            }]
        });

        $("#chart3").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "area",
                data: data3
            }]
        });

        $("#chart4").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "stepline",
                data: data4
            }]
        });
    });
</script>
@endsection

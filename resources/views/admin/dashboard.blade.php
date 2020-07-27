@extends('layouts.app')
@section('title', 'WELCOME PAGE')
@section('content')


    <div class="row">
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
                <h2>{{$Events['total_events']}}</h2>
                <h3>Total Events</h3>



            </div>
    </div>

    <div class="col-lg-4 ">
        <div class="stat-box2" >
            <!--<div class="" style="width: 18rem; height: 150px;" >

            </div> -->
            <h2>{{$Revenue['total_Revenue']}}</h2>
            <h3>Total Revenue</h3>



        </div>
    </div>

    <div class="col-lg-4 ">

            <div class="stat-box3" >
                <!--<div class="" style="width: 18rem; height: 150px;" >

                </div> -->
                <h2>{{$Events['total_events']}}</h2>
                <h3>Tickets Sold</h3>



            </div>

</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
    <div class="elegant-calendar">
        <p id="reset">reset</p>
        <div id="header" class="clearfix">
            <div class="pre-button"><</div>
            <div class="head-info">
                <div class="head-day"></div>
                <div class="head-month"></div>
            </div>
            <div class="next-button">></div>
        </div>
        <table id="calendar">
            <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
        </div>
    </div>
</div>




@endsection

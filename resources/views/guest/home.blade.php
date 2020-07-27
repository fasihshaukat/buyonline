@extends('layouts.guest')
@section('title', 'Buy Online')
@section('content')
    @include('partials.guest.header')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <img class="d-block w-100" src="images/ff.jpg" alt="First slide" style="height: 480px;">

    <div class="jumbotron jumbotron-fluid "id="about" style="background-color:#f2f6f2 ">
        <div class="container">
            <h3 ><b>WHAT IS BUYONLINE.COM?</b></h3>
            <p  style="font-size:17px;">We , Buy Online , are a team to provide you with your One Stop Entertainment Solution - With the passion of giving the best , deriving innovation for your ease , inculcating the new trends to let you stay connected with everything happening around..</p>

            <h3 ><b>WHAT WE DO?</b></h3>
            <p style="font-size:17px;">Online portal that has made buying tickets online easy with simple steps without any unnecessary frills:</p>
            <ul>
                <li>Select an event in your city</li>
                <li>Buy Your Ticket Online</li>
                <li>Book Your Tickets</li>
                <li>Pay Online</li>

            </ul>

        </div>
    </div>

    <div class="jumbotron jumbotron-fluid "id="about" style="background-color: white">
        <div class="container">
            <h3 ><b>WHAT IS BUYONLINE.COM?</b></h3>
            <p  style="font-size:17px;">We , Buy Online , are a team to provide you with your One Stop Entertainment Solution - With the passion of giving the best , deriving innovation for your ease , inculcating the new trends to let you stay connected with everything happening around..</p>

            <h3 ><b>WHAT WE DO?</b></h3>
            <p style="font-size:17px;">Online portal that has made buying tickets online easy with simple steps without any unnecessary frills:</p>
<ul>
    <li>Select an event in your city</li>
    <li>Buy Your Ticket Online</li>
    <li>Book Your Tickets</li>
    <li>Pay Online</li>

</ul>

        </div>
    </div>



    <section id="events" class="events">
        <div class="container">
            <h3><b>Popular Events </b><i class="fa fa-angle-down" aria-hidden="true" style="font-size: 20pt;color: #7a4092;"></i></h3>
            <div class="row">
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <div class="col-lg-4">

                            <h2><a href="{{ route('events.show', $event->id) }}" class=""> {{ $event->title }} </a></h2>
                            <div class="event-meta">
                                <div class="venue"><span class="label label-default">{{ $event->venue }}</span></div>
                                <div class="datetime"><span class="label label-success">{{ $event->start_time }}</span></div>
                            </div>
                            {!! $event->description !!}
                        </div>
                        @if ($loop->index > 0 && ($loop->index + 1) % 3 == 0) </div><hr /><div class="row"> @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <div class="jumbotron jumbotron-fluid "id="about" style="background-color: #F5F8FA">
    </div>

    <img class="d-block w-100" src="images/covers.jpg" alt="First slide" style="height: 440px;">

    <section class="col-xs-12 contactWidget">

    </section>
        <div class="jumbotron jumbotron-fluid "  style="background-color: #1F262D">
            <div class="container">
                <h4  style="color: white;">WHAT IS BUYONLINE.COM?</h4>
                <p class="lead" style="color: #c4c3c5;font-size:13px;">We , Buy Online , are a team to provide you with your One Stop Entertainment Solution - With the passion of giving the best , deriving innovation for your ease , inculcating the new trends to let you stay connected with everything happening around..</p>

                <section class="col-md-4 col-lg-3 col-sm-4 col-xs-12 " >
                    <h4 style="color: white;">Events</h4>

                        <li style="color: #c4c3c5"><a href="" style="color: #c4c3c5">Events in Karachi</a></li>
                        <li style="color: #c4c3c5"><a href="" style="color: #c4c3c5">Events in Lahore</a></li>
                        <li style="color: #c4c3c5"><a href="" style="color: #c4c3c5">Events in Islamabad</a></li>
                        <li style="color: #c4c3c5"><a href="" style="color: #c4c3c5">Events in Rawalpindi</a></li>
                        <li style="color: #c4c3c5"><a href="" style="color: #c4c3c5">Events in Multan</a></li>
                        <li style="color: #fff;"><a href="" style="color: #c4c3c5">See All</a></li>



                </section>

                <section class="col-md-4 col-lg-3 col-sm-4 col-xs-12 ">
                    <h4 style="color: white;">For Bookings</h4>

                    <i class="fa fa-phone " aria-hidden="true" style="color: #c4c3c5">  +923155158619</i>
                    <br>
                    <i class="fa fa-envelope" aria-hidden="true" style="color: #c4c3c5">  buyonline@org.com</i>

                </section>

                <section class="col-md-4 col-lg-3 col-sm-4 col-xs-12 ">
                    <h4 style="color: white;">Contact Us</h4>


                    <i class="fa fa-phone" aria-hidden="true" style="color: #c4c3c5">  +923155158619</i>
                    <br>
                    <i class="fa fa-envelope" aria-hidden="true" style="color: #c4c3c5">  fasihshaukatawan@gmail.com</i>

                </section>
                <section class="col-md-4 col-lg-3 col-sm-4 col-xs-12 ">

                    <a href="https://www.facebook.com/bookitnowpk/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"style="margin-right: 10px;"></i></a>
                    <a href="https://plus.google.com/+BookitnowPkOfficial" target="_blank"><i class="fa fa-google-plus" aria-hidden="true" style="margin-right: 10px;"></i></a>
                    <a href="https://twitter.com/bookitnowpk" target="_blank"><i class="fa fa-twitter" aria-hidden="true"style="margin-right: 10px;"></i></a>
                    <a href="https://www.pinterest.com/bookitnowpk/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"style="margin-right: 10px;"></i></a>
                    <a href="https://www.instagram.com/bookitnow.pk/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"style="margin-right: 10px;"></i></a>

                </section>
            </div>
            <section  >
                <footer class="page-footer font-small cyan darken-3 " style="background-color: #1F262D; width: 100%;" id="contact" >

                    <div class="container-fluid">


                        <div class="footer-copyright text-center py-3" style="color: white;padding-top: 35px;">© fiverr.com/fasih_shaukat:

                            <a href="https://www.fiverr.com/fasih_shaukat " class="text-muted"> Services on fiverr</a>
                        </div>
                    </div>
                    <!-- Copyright -->
                </footer>
            </section>


            </div>




@endsection
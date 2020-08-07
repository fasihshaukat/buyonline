@extends('layouts.guest')
@section('title', 'Buy Online')
@section('content')
    @include('partials.guest.header')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


       <img class="d-block w-100" src="images/cover9.jpg" alt="First slide" style="height: 480px;">





    <div class="jumbotron jumbotron-fluid "id="about" style="background-color: white;  ">
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

    <div class="jumbotron jumbotron-fluid "id="about" style=" background-color: #F5F8FA">
    </div>

    <div class="jumbotron jumbotron-fluid "id="about" style="  background: url({{('images/background.png')}}) repeat;
            background-color: #1f0e34;">
        <div class="container">
            <div class="row">
            <div class="col-lg-5">
            <h3  style="color: white;">Discover Digital Events</h3>
<p class="lead" style="color: white;font-size: 16px;">We bring you online experiences to make sure you've got an exciting plan every day.
    Bake a cake, get in some yoga, and stay entertained with digital events on the Paytm Insider app.</p><span></span>

            </div>
                <div class="col-lg-7 " >
                <div class="badges" style="margin-top: 70px;">
                    <a class="badge-link" href="#"><img src="images/googleplay.svg" alt="" style="width: 150px; height: auto;  "></a>
                    <a class="badge-link" href="#"><img src="images/app.svg" alt="" style=""></a>
                </div>
                </div>


            </div>
        </div>

    </div>
    <div class="jumbotron jumbotron-fluid "  style="background-color: white">
    <div class="container text-center">
        <h3>Give your recommendations and feedback to us !</h3>
        <!-- Trigger the modal with a button -->
        <br>
        <button type="button" class="btn  btn-lg " style="border-radius: 25px;  width: 180px; margin-left: 20px; background-color: #391054 ; color: white;"  data-toggle="modal" data-target="#myModal">Give Feedback</button>

        <!-- Modal -->
    </div>
    </div>
        <div class="container" id="feedback" >
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #391054 ">
                        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                        <h4 class="modal-title" style="color: white">Feedback</h4>
                    </div>
                    <div class="modal-body">
                        <h4 align="center">Please tell us what do you think,any kind of feedback is highly appreciated.</h4><br />
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="post" action="{{url('sendemail/send')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Enter Your Name</label>
                                <input type="text" name="name" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Enter Your Email</label>
                                <input type="text" name="email" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <label>Enter Your Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" class="btn btn-success" value="Send" />
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

<!-- feedback portion

    <div class="container box">
        <h3 align="center">Give Feedback To Us !</h3><br />
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form method="post" action="{{url('sendemail/send')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Enter Your Name</label>
                <input type="text" name="name" class="form-control" value="" />
            </div>
            <div class="form-group">
                <label>Enter Your Email</label>
                <input type="text" name="email" class="form-control" value="" />
            </div>
            <div class="form-group">
                <label>Enter Your Message</label>
                <textarea name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" class="btn btn-success" value="Send" />
            </div>
        </form>

    </div> -->

    <!-- footer -->
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
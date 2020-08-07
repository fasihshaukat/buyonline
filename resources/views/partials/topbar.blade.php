<header class="main-header navbar-fixed-top" style="position: sticky">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap1.min.css">
     <link rel="stylesheet" type="text/css" href="css/bootstrap1.css">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
 -->
    <!-- Logo -->
    <a href="{{ url('/admin/home') }}" class="logo"
       style="font-size: 16px;">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini text-left">
           @lang('quickadmin.quickadmin_title')</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg text-left">
           @lang('quickadmin.quickadmin_title') Tickets</span>
    </a>

    <style>
        /* Style the input field */
        #myInput {
            padding: 20px;
            margin-top: -6px;
            border: 0;
            border-radius: 0;
            background: #f1f1f1;
        }
    </style>





    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".dropdown-menu li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top">

        <!-- Sidebar toggle button-->
        <div class="dropdown navbar-right" style="margin-right: 15px; margin-top: 7px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #f5f5ef;color: black;">Fasih Shaukat
                <span class="caret"></span></button>

            <ul class="dropdown-menu">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/profile') }}">Edit Profile</a></li>
                <li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>


            </ul>
        </div>
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

      <div class="dropdown" style="float: right; padding: 16px;margin-right: 20px;">
            <a href="#" onclick="return false;" role="button" data-toggle="dropdown" id="dropdownMenu1" data-target="#" style="float: left" aria-expanded="true">
                <i class="fa fa-bell-o" style="font-size: 20px; float: left; color: #f2f6f2">
                </i>
            </a>
            <span class="badge badge-danger">6</span>
            <ul class="dropdown-menu dropdown-menu-left pull-right" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation">
                    <a href="#" class="dropdown-menu-header">Notifications</a>
                </li>


            </ul>
        </div>



    </nav>

</header>





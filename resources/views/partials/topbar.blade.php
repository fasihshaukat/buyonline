<header class="main-header">
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
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div class="dropdown navbar-right " style="margin-right:20px;margin-top: 7px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Fasih Shaukat
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>

            </div>
        </div>
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>



    </nav>
</header>



<header class="main-header navbar-fixed-top ">
    <a href="{{ route('guest.home') }}" class="logo ">

        <span class="logo-sm "><img src="images/logo.png"></span>

    </a>
    <nav class="navbar navbar-expand navbar-static-top fixed-top ">

        <div class="container-fluid ">

            <ul class="nav navbar-nav fixed-top ">


                <li><a href="#about"class="nav-item" >About</a></li>
                <li  ><a href="#events" class="nav-item" >Events</a></li>


                <li ><a href="#contact" class="nav-item">Contact</a></li>

                <li ><a href="#feedback" class="nav-item">buyonline@org.com</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{ url('/login') }}">Login</a></li>
            </ul>
        </div>
    </nav>
</header>

<nav class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="navigation">
                    <div class="nav-header pull-left">
                        <ul>
                            <li class="dropdown">
                                <a href="{{ url('/') }}">Home</a>
                                <ul class="submenu">
                                    <!-- <li><a href="events.html">Current Campaigns</a></li> -->
                                    <li><a href="{{ url('/gallery') }}">Link to Galleries</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </li>
                          <li class="dropdown">
                                <a href="{{ url('/vision') }}">About Us</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/who-we-are') }}">Who we are</a></li>
                                    <li><a href="{{ url('/vision') }}">Vision, Mission, Values</a></li>
                                    <li><a href="{{ url('/team') }}">Our Team</a></li>
                                    <li><a href="#">Our Donation Policy</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="{{ url('/gallery') }}">Galleries</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="donate-col col-xs-12 col-sm-12 col-lg-3 col-md-3">
                <div class="donate-btn clearfix">
                    <!-- Modal: donate now Starts -->
                    <a class="thm-btn pull-right" data-toggle="modal" href="index.html#modal-donate-now">Donate Now</a>

                    <div class="nav-footer pull-left">
                        <button><i class="fa fa-bars"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>

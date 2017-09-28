<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kumator Mercy And Hope Foundation</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/resources/favicon.png" sizes="16x16">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blue.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="css/config.css">
    <link href="css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="css/light-blue.css" rel="alternate stylesheet" title="light Blue color">
    <link href="css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="css/purple.css" rel="alternate stylesheet" title="Purple color">
    <link href="css/oxford.css" rel="alternate stylesheet" title="Oxford color">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
    <!-- Demo Purpose Only. Should be removed in production : END -->

    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom Margin Padding stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-margin-padding.css">
</head>

<body>
<div class="se-pre-con"></div>
 <div class="top-bar hidden-xs "></div>
    <!-- /.top-bar -->
    <div>
        @yield('header')
    </div>
    <!-- /.header -->
    <div>
        @yield('navbar')
    </div>
    <!-- /.mainmenu-area -->

    <div>
        @yield('slider')
    </div>

    <!--Featured Three Column-->
    <div>
        @yield('featured')
    </div>


    <!--Start Our Event Area-->
    <div>
        @yield('events')
    </div>

    <!--Start Our Gallery Areas-->
    <div>
        @yield('gallery')
    </div>

    <div class="footer-call-to-action">
        <div class="container">
            <div class="row">

                <div class="col-md-4 sm-text-center">
                    <h3>Sign up for Updates </h3>
                    <p>By subscribing to our mailing list you will always be updated. </p>
                </div>
                <div class="col-md-8 text-right sm-text-center">
                    <form action="{{url('/subscriptions')}}" method="post">
                        {{ csrf_field() }}
                        @if(session('message'))
                            <div class="alert alert-info">{{ session('message') }}</div>
                        @endif
                        <input type="text" name="fullname" placeholder="Full Name" value="{{old('fullname')}}">
                        <input type="text" name="email_address" placeholder="Email Address" value="{{old('email_address')}}">
                        <button type="submit" class="thm-btn inverse mt-sm-15">Subscribe Now</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!--Footer div-->
    @include('layouts.footer')

    <div class="footer-bottom">
        <div class="container text-center">
            <p>© 2017 KUMATOR MERCY AND HOPE FOUNDATION - ALL RIGHTS RESERVED</p>
        </div>
    </div>
    <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog style-one" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Make a Donation</h4>
                </div>
                <div class="modal-body">
                    <div class="donation-form-outer">
                        <form action="contact.html#" method="post">
                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h3 class="text-thm">Account Details</h3>
                            </div>
                            <hr>
                            <!--Form Portlet-->
                            <div class="form-portlet">
                                <h3>Account Name</h3>
                                <div class="row clearfix">
                                    <p>Kumator Mercy and Hope Foundation</p>
                            </div>
                            <hr>
                            <div class="form-portlet">
                                <h3>Account Number</h3>
                                <div class="row clearfix">
                                    <p>1019947393</p>
                            </div>
                            <hr>
                            <div class="form-portlet">
                                <h3>Bank Name</h3>
                                <div class="row clearfix">
                                    <p>United Bank for Africa (UBA)</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
    <!-- Modal: donate now Ends -->


    <!-- switch color -->
    <div class="config open">
        <div class="config-options">
            <h4>Colors</h4>
            <ul>
                <li><a style="background: #37aecc;color: #37aecc" class="changecolor blue-text" href="index.html#" title="Blue color">---</a></li>
                <li><a style="background: #cbebf7;color: #cbebf7"  class="changecolor light-blue-text" href="index.html#" title="light Blue color">---</a></li>
                <li><a style="background: #32374b;color: #32374b"  class="changecolor oxford-text" href="index.html#" title="Oxford color">---</a></li>
                <li><a style="background: #a1cf68;color: #a1cf68" class="changecolor green-text" href="index.html#" title="Green color">---</a></li>
                <li><a style="background: #FF7619;color: #FF7619" class="changecolor orange-text" href="index.html#" title="Orange color">---</a></li>
                <li><a style="background: #7300ab;color: #7300ab" class="changecolor purple-text" href="index.html#" title="Purple color">---</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="index.html#"><i class="fa fa-cog"></i></a>
    </div>


    <!--Scroll to top-->
    <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

    <!-- main jQuery -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- bx slider -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- validate -->
    <script src="js/jquery-parallax.js"></script>
    <!-- validate -->
    <script src="js/validate.js"></script>
    <!-- mixit up -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- fancybox -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- circle progress -->
    <script src="js/circle-progress.js"></script>
    <!-- appear js -->
    <script src="js/jquery.appear.js"></script>
    <!-- count to -->
    <script src="js/jquery.countTo.js"></script>
    <!-- gmap helper -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzS7kYaXQy0aJGMMArSfa2dDYTyuOzYUc"></script>
    <!-- gmap main script -->
    <script src="js/gmap.js"></script>
    <!-- isotope script -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- jQuery ui js -->
    <script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
    <!-- revolution scripts -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- thm custom script -->
    <script src="js/custom.js"></script>


    <!-- For demo purposes – can be removed on production -->
    <script src="switchstylesheet/switchstylesheet.js"></script>

    <script>
        $(document).ready(function(){
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>OpenDSS | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Themelize.me">

    {{basset_stylesheets("appstrap")}}
    {{basset_stylesheets("nvd3")}}
    {{basset_javascripts("nvd3")}}


    @yield('styles')



    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

    {{basset_javascripts("htmler")}}
        <![endif]-->

    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>
</head>

<body class="page page-index">
<div id="navigation" class="wrapper">
    <div class="navbar  navbar-static-top">

        <!--Hidden Header Region-->


        <!--Header & Branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row-fluid">
                    <div class="span6">
                        <!--branding/logo-->
                        <a class="brand" href="index.htm" title="Home">
                            <h1><span>Open</span>DSS<span>.</span></h1>
                        </a>
                        <div class="slogan">An Open Decision Support System</div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-inner">

                <!--mobile collapse menu button-->
                <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>




                <!--everything within this div is collapsed on mobile-->
                <div class="nav-collapse collapse">

                    <!--main navigation-->
                    <ul class="nav" id="main-menu">
                        <li class="home-link"><a href="{{URL::to('/')}}"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>
                        <li><a href="{{URL::to('/')}}" class="menu-item">Home</a></li>
                         <li><a href="{{URL::to('/analyze')}}" class="menu-item">Analysis</a></li>
                        <li><a href="{{URL::to('/help')}}" class="menu-item">Help</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>
@yield("content")
<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span3 col">
                <div class="block contact-block">
                    <!--@todo: replace with company contact details-->
                    <h3>Contact Us</h3>
                    <address>
                        <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 0722 41331</p>
                        <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@openDSS.me</p>
                        <p><abbr title="Address"><i class="icon-home"></i></abbr>RHOK, Nairobi.</p>
                    </address>
                </div>
            </div>
            <div class="span5 col">
                <div class="block">
                    <h3>About Us</h3>
                    <p>
                        We are a company interested in making yoyur data easier to work with and access. Also easier to view!!
                    </p>
                </div>
            </div>
            <div class="span4 col">
                <div class="block newsletter">
                    <h3>Built By:</h3>
                    <p>
                        Pirates of the Horn
                    </p>
                    <!--@todo: replace with mailchimp code-->

                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a></div>
            <!--@todo: replace with company copyright details-->
            <div class="subfooter">
                <div class="span6">
                    <p>Site template by <a href="#">OpenDSS</a> | Copyright 2013 &copy; Pirates Of The Horn</p>
                </div>
                <div class="span6">
                    <ul class="inline pull-right">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Scripts -->
{{basset_javascripts("appstrap")}}


@yield('scripts')
</body>
</html>
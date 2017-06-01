<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Relief Supports Sri Lanka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Facebook Open Graph Meta Tags -->
    <meta property="og:title" content="Relief Supports Sri Lanka"/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content="Relief Supports Sri Lanka"/>
    <meta property="og:description" content=" අයහපත් කාලගුණ තත්වය හේතුවෙන් ආපදාවට පත්වූ ඔබේ අවශ්‍යතා සහ මේ මොහොතේ ඔවුන්ට උපකාර කිරීමට සූදානම් ඔබත් මුනගැස්සවන වෙබ් සේවාවක්. ඔබේ අවශ්‍යතා සහ ආධාර දැන්ම එක් කරන්න. Post your relief support activities and connect with people who need it the most. This is a community driven Open Source project to support relief support activities conducted by volunteers. This project was originally created to support flood relief activities in Sri Lanka in May 2017."/>

    <!-- Loading Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,700" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/public/css/flat-ui.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="/public/js/vendor/html5shiv.js"></script>
    <script src="/public/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<style>
    * {
        font-family: 'Abhaya Libre', serif;
    }

    body {
        padding-top: 95px;
    }

    .main-container {
        min-height: 600px;
    }

    footer {
        margin-top: 80px;
    }

    .share-buttons img {
        width: 35px;
        padding: 5px;
        border: 0;
        box-shadow: 0;
        display: inline;
    }
</style>

<!-- Static navbar -->
<div class="navbar navbar-inverse navbar-fixed-top navbar-lg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="/">Relief Supports</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li {{ (Request::is('/') ? 'class=active' : '') }}><a href="/">{{ __('home.home') }}</a></li>
                <li {{ (Request::is('donations*') ? 'class=active' : '') }}><a href="/donations">{{ __('home.donate') }}</a></li>
                <li {{ (Request::is('needs*') ? 'class=active' : '') }}><a href="/needs">{{ __('home.needs') }}</a></li>
                <li {{ (Request::is('emergency-contacts*') ? 'class=active' : '') }}><a href="/emergency-contacts">{{ __('home.important_tels') }}</a></li>
                <li {{ (Request::is('online-donations*') ? 'class=active' : '') }}><a href="/online-donations">{{ __('home.online_donations') }}</a></li>
                <li {{ (Request::is('twitter-feed*') ? 'class=active' : '') }}><a href="/twitter-feed">#FloodSL Twitter Feed</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li {{ (App::isLocale('si') ? 'class=active' : '') }}><a href="/locale/si">සිංහල</a></li>
                <li {{ (App::isLocale('ta') ? 'class=active' : '') }}><a href="/locale/ta">தமிழ்</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

@yield('content')
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <h3 class="footer-title">© Relief Supports {{ date('Y') }}</h3>
                <p>{{ __('home.footer_line_1')}}</p>
                <p>{{ __('home.footer_line_2')}}</p>
            </div> <!-- /col-xs-7 -->

            <div class="col-md-5 col-xs-12">
                <div class="footer-banner">
                    <h3 class="footer-title">Disclaimer</h3>
                    <p>{{ __('home.footer_line_3')}}</p>
                    <p>{!! __('home.footer_line_4') !!}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->

<script src="/public/js/vendor/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/public/js/vendor/video.js"></script>
<script src="/public/js/flat-ui.min.js"></script>
<script src="/public/js/donations.js"></script>

</body>
</html>

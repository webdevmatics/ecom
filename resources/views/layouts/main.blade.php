<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','Mickey Shirts')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                MC-MyKey Shirts
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('shirts')}}">
                    SHIRTS
                </a>
            </li>
            <li>
                <a href="#">
                    CONTACT
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    CART
                    <span class="alert badge">
                                8
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>

@yield('content')
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>Coded with love by Webdevmatics for educational purpose only</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque
                nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/webdevmatics">GitHub</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
                <ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="mobile-web-app-capable" content="yes">

    <title>{{ config('app.name', 'Kalanto') }}</title>

    <meta property="og:site_name" content="{{ config('app.name', 'Kalanto') }}">
    <meta property="og:title" content="{{ config('app.name', 'Kalanto') }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{request()->url()}}">
    <meta property="og:description" content="Showcase Your Talent, Get Discovered">

    <meta name="medium" content="image">
    <meta name="theme-color" content="#ff003f">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png?v=2">
    <link rel="apple-touch-icon" type="image/png" href="/img/favicon.png?v=2">
    <link href="{{ mix('css/landing.css') }}" rel="stylesheet">
    <style type="text/css">
        .feature-circle {
            display: flex !important;
            -webkit-box-pack: center !important;
            justify-content: center !important;
            -webkit-box-align: center !important;
            align-items: center !important;
            margin-right: 1rem !important;
            background-color: #FF003F !important;
            color: #fff;
            border-radius: 50% !important;
            width: 60px;
            height:60px;
        }
        .section-spacer {
            height: 13vh;
        }
        .small-text {
            color: #000 !important;
        }
        .btn-kalanto {
            background-color: #FF003F !important;
            color: #fff !important;
        }
        .btn-kalanto:hover {
          border: 5px solid #f990aa;
          cursor: pointer;
        }
    </style>

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-XCTJ7RVLJL"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-XCTJ7RVLJL');
        </script>
        
        <link rel="apple-touch-icon" href="img/assets/apple-icon-180.png">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2048-2732.jpg" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2732-2048.jpg" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1668-2388.jpg" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2388-1668.jpg" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1536-2048.jpg" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2048-1536.jpg" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1668-2224.jpg" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2224-1668.jpg" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1620-2160.jpg" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2160-1620.jpg" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1284-2778.jpg" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2778-1284.jpg" media="(device-width: 428px) and (device-height: 926px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1170-2532.jpg" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2532-1170.jpg" media="(device-width: 390px) and (device-height: 844px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1125-2436.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2436-1125.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1242-2688.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2688-1242.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-828-1792.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1792-828.jpg" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1242-2208.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-2208-1242.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-750-1334.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1334-750.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-640-1136.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
        <link rel="apple-touch-startup-image" href="img/assets/apple-splash-1136-640.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)">
        </head>
<body class="">
    <main id="content">
        <section class="container kalanto-text">
            <div class="section-spacer"></div>
            <div class="row pt-md-5 mt-5">
                <div class="col-12 col-md-6 d-none d-md-block">
                    <div class="m-my-4">
                        <p class="display-2 font-weight-bold">Showcase Your Talent</p>
                        <p class="h1 font-weight-bold">Get Discovered!</p>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div>
                        <div class="pt-md-3 d-flex justify-content-center align-items-center">
                            <img src="/img/pixelfed-icon-color.svg" loading="lazy" width="50px" height="50px">
                            <span class="font-weight-bold h3 ml-2 pt-2">Kalanto</span>
                        </div>
                        <div class="d-block d-md-none">
                            <p class="font-weight-bold mb-0 text-center">Showcase Your Talent, Get Discovered</p>
                        </div>
                        <div class="card my-4 shadow-none border">
                            <div class="card-body px-lg-5">
                                <div class="text-center">
                                    <p class="small text-uppercase font-weight-bold small-text">Account Login</p>
                                </div>
                                <div>
                                    <form class="px-1" method="POST" action="{{ route('login') }}" id="login_form">
                                        @csrf
                                        <div class="form-group row">

                                            <div class="col-md-12">
                                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{__('Email')}}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{__('Password')}}" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                                        <span class="font-weight-bold small ml-1 small-text">
                                                            {{ __('Remember Me') }}
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        @if(config('captcha.enabled'))
                                        <div class="d-flex justify-content-center mb-3">
                                            {!! Captcha::display() !!}
                                        </div>
                                        @endif
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-kalanto btn-block py-0 font-weight-bold text-uppercase">
                                                    {{ __('Login') }}
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-none border card-body">
                            <p class="text-center mb-0 font-weight-bold small">
                                @if(config('pixelfed.open_registration'))
                                <a href="/register">Register</a>
                                <span class="px-1">·</span>
                                @endif
                                <a href="/password/reset">Password Reset</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-spacer"></div>
            <div class="row py-5 mb-5">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="section-spacer"></div>
                    <div class="mt-5">
                        <p class="text-center display-4 font-weight-bold">Don't Have Accont?</p>
                    </div>
                    <div class="my-2">
                        <a href="/register" class="btn btn-kalanto btn-block py-1 mt-5 rounded-pill font-weight-bold text-uppercase">
                            Register Now 
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-spacer"></div>
            <div class="row py-5 mt-5 mb-5">
                <div class="col-12 col-md-6 d-none d-md-block">
                    <div>
                        <div class="row mt-4 mb-1">
                            <div class="col-4 mt-2 px-0">
                                <div class="px-1 shadow-none">
                                    <img src="/_landing/1.jpeg" class="img-fluid" loading="lazy" width="640px" height="640px">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="section-spacer"></div>
                    <div class="mt-5">
                        <p class="text-center h1 font-weight-bold">Built For you!</p>
                    </div>
                    <div class="mt-5">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-center">
                                <span class="font-weight-bold h1">2k+</span>
                                <span class="d-block small-text text-uppercase">Posts</span>
                            </span>
                            <span class="text-center">
                                <span class="font-weight-bold h1">5k+</span>
                                <span class="d-block small-text text-uppercase">Likes</span>
                            </span>
                            <span class="text-center">
                                <span class="font-weight-bold h1">10k+</span>
                                <span class="d-block small-text text-uppercase">Hashtags Used</span>
                            </span>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="lead small-text text-center">A Platform to Share your Sportmanship Talent</p>
                    </div>
                </div>
            </div>
            <div class="row py-5 mb-5">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="section-spacer"></div>
                    <div class="mt-5">
                        <p class="text-center display-4 font-weight-bold">Feature Packed.</p>
                    </div>
                    <div class="my-2">
                        <p class="h4 font-weight-light small-text text-center">Built for Sports Lovers</p>
                    </div>
                </div>
            </div>
            <div class="row pb-5 mb-5">
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="mb-5">
                        <div class="media">
                            <div class="feature-circle">
                                <i class="far fa-images fa-lg"></i>
                            </div>
                            <div class="media-body">
                                <p class="h5 font-weight-bold mt-2 mb-0">Albums</p>
                                Create an album with up to <span class="font-weight-bold">{{config('pixelfed.max_album_length')}}</span> photos
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="media">
                            <div class="feature-circle">
                                <i class="far fa-folder fa-lg"></i>
                            </div>
                            <div class="media-body">
                                <p class="h5 font-weight-bold mt-2 mb-0">Collections</p>
                                Organize your posts
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="media">
                            <div class="feature-circle">
                                <i class="fas fa-image fa-lg"></i>
                            </div>
                            <div class="media-body">
                                <p class="h5 font-weight-bold mt-2 mb-0">Filters</p>
                                Add a filter to your photos
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="mb-5">
                        <div class="media">
                            <div class="feature-circle">
                                <i class="far fa-comment fa-lg"></i>
                            </div>
                            <div class="media-body">
                                <p class="h5 font-weight-bold mt-2 mb-0">Comments</p>
                                Comment on a post, or send a reply
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="media">
                            <div class="feature-circle">
                                <i class="far fa-list-alt fa-lg"></i>
                            </div>
                            <div class="media-body">
                                <p class="h5 font-weight-bold mt-2 mb-0">Discover</p>
                                Explore categories, hashtags and topics
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="media">
                            <div class="feature-circle">
                                <i class="fas fa-history fa-lg"></i>
                            </div>
                            <div class="media-body">
                                <p class="h5 font-weight-bold mt-2 mb-0">Stories</p>
                                Share posts that disappear after 24h
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
    @include('layouts.partial.footer')
</body>
</html>

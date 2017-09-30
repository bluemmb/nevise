<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>نویسه</title>

        <!-- Fonts -->
        <link href="<?= asset("font-mitra/font-mitra.css") ?>" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #f5f6f7;
                font-family: 'IRMitra', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                direction: rtl;
                text-align:right;
            }

            body {
                background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("<?= asset("pix/home-background.jpg") ?>");
                background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top {
                position: absolute;
                top: 0px;
                right: 0px;
                left: 0px;
                height: 60px;
                background-color: rgba(0,0,0,0.8);
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-right > a {
                color: #f5f6f7;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #00acd6;
                font-size: 84px;
                border-bottom: 3px solid #00acd6;
            }

            .description {
                font-size: 32px;
            }

            .links > a {
                color: #999;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top">
                @if (Route::has('login'))
                    <div class="top-right">
                        @auth
                            <a href="{{ url('/home') }}">خانه</a>
                        @else
                            <a href="{{ route('login') }}">ورود</a>
                            <a href="{{ route('register') }}">ثبت نام</a>
                        @endauth
                    </div>
                @endif
            </div>

            <div class="content">
                <div class="title m-b-md">
                    نویسه
                </div>

                <div class="description m-b-md">
                    ابزار فارسی ساده برای نوشتن مستندات و مدیریت آنها
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">داکیومنت</a>
                    <a href="https://github.com/laravel/laravel">گیت هاب</a>
                </div>
            </div>
        </div>
    </body>
</html>

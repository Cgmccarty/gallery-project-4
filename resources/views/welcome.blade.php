<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Galerie Gothic</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
        <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: darkgrey;
                color: black;
                font-family: 'Cinzel', serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
            }

            img {
                max-width: none !important;
                max-height: none !important;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                margin-top: -50px;
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body class="container">
        <div class="pt-5 position-ref full-height">

            <div class="content">
                <div class="title row no-gutters">
                    <div class="col-3">
                        <img src="https://i.pinimg.com/236x/37/54/f0/3754f01c56a150e3e2c8f6d5150fa83c--medieval-life-medieval-art.jpg" title="Arras tapestry ca. 1410">
                    </div>
                    <div class="col-6">
                        Galerie Gothic
                        <div class="links pt-4">
                            @if (Route::has('login'))
                                @auth
                                    <a class="btn p-3 bg-dark" href="{{ url('/home') }}">Home</a>
                                @else
                                    <a class="btn p-3 bg-dark" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a class="btn p-3 bg-dark" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="https://i.pinimg.com/236x/b3/d2/f9/b3d2f92a26014488bac2df82b7e06d21--renaissance-art-tempera.jpg" title="St. Gabriel">
                    </div>
                </div>

                <div class="pt-4 justify-content-center row no-gutters">
                    <img src="http://www.flonthego.com/wp-content/uploads/2012/06/bagliori-dorati.jpg" title="Altarpiece of Saint John by Bernat Martorell">
                </div>

            </div>
        </div>
    </body>
</html>

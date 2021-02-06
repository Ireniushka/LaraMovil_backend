<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Salesianos San Ignacio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            /* Float four columns side by side */
            .column {
                float: left;
                width: 33%;
                padding: 0 10px;
            }

            .boton{
                width:250px;
                margin-top:3px;
                margin-left:-80px; 
            }

            /* Remove extra left and right margins, due to padding */
            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive columns */
            @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-top: 0;
            }
            }

            /* Style the counter cards */
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding: 8px;
                text-align: center;
                background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
        @extends('layouts.app')

        @section('content')
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Salesianos San Ignacio
                </div>

                @Logged()
                    <div class="row flex-center">                     
                        <div class="column">
                            <div class="card">
                                <h2>Menu principal:</h2>
                                <ul>
                                    <ol><a href="users" class="boton btn btn-success" style="font-size:20px">Gestión de usuarios</a></ol>
                                    <ol><a href="emails" class="boton btn btn-success" style="font-size:20px">Envío de e-mails</a></ol>
                                    <ol><a href="informes" class="boton btn btn-success" style="font-size:20px">Generación de informes</a></ol>
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    @include('partials.login_link', ['message' => __("Inicie sesión para trabajar")])
                @endLogged
            </div>
        </div>
        @endsection
    </body>
</html>

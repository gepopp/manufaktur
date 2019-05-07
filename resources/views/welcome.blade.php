<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <div class="container-fluid" style="height: 100vh; background-image: url({{ asset('img/raum_manufaktur_home_eingang1920.jpg') }}); background-repeat: no-repeat">
            <div style="position: absolute; left: 45%; bottom: -50px; background-color: #00c2de; width: 10%; height: 500px"></div>
            <div style="position: absolute; left: 50%; bottom: -50px" class="shadow-lg">
                <img src="{{ asset("img/logo_banner.png") }}" class="img-fluid w-75">
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="{{ asset('img/cooperation-in-cleaning-offices-PUA3TWQ.jpg') }}" class="img-fluid shadow-lg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-6">
                        <h1 style="color:#00c2de">Lösungen für Spezialreinigungen</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

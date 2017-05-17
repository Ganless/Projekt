<?php
session_start();
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap-projekt</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="Home.php">IT-Store</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Hem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produkter.php">Produkter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kontakta.php">Kontakta oss</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="hittaOss.php">Hitta oss</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="container-account">
                        <div class="btn-group">
                            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="Profile.php">Profil</a>
                                </li>
                            </ul>
                        </div>
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Sök</button>
                    </div>
                </form>
            </div>
        </nav>

        <style>
            #map {
                height: 400px;
                width: 100%;
            }
            #watch {
                height: 100%;
                width: 100%;
            }

        </style>
        </head>

        <body>
            <div id="map"></div>
            <script>
                function initMap() {
                    var Marked = {
                        lat: 59.347192,
                        lng: 18.049144
                    };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 18,
                        center: Marked,
                        mapTypeId: 'satellite'
                    });
                    map.setTilt(45);
                    var marker = new google.maps.Marker({
                        position: Marked,
                        map: map
                    });

                }

            </script>
                <div class="container">
                    <br>
                    <h2>Klockan i våra affärer är just nu</h2>
                </div>
            <div id="watch">
              <br>
                <canvas id="duk"></canvas>
                <script src="klocka.js"></script>
            </div>
            
            
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzYTzSBI5TOYysFyIbuOxxuRJuOP5kDCM&callback=initMap"></script>
        </body>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>

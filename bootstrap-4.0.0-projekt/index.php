<!DOCTYPE html>
<html lang="sv-SE">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap-projekt</title>

    <!-- Bootstrap -->
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--  NAVIGATION BAR  -->
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">IT-Store</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hem <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produkter.php">Produkter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Kontakta oss</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="findUs.php">Hitta oss</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="container-account" id="Account">
                    <div class="btn-group">
                        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" id="LoginPage">Logga in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="registrera.php" id="RegisterPage">Bli medlem</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Sök</button>
            </form>
        </div>
    </nav>


    <div class="Content">

        <div class="container banner">
            <div class="jumbotron">
                <h1>Sample text</h1>
                <p>More Sample text</p>
            </div>

            <h5>Populära produkter hos oss!</h5>
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Köp nu!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Köp nu!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Köp nu!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Köp nu!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Köp nu!</a>
                    </div>
                </div>

                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Köp nu!</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Köp nu!</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Köp nu!</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Köp nu!</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Köp nu!</a>
                        </div>
                    </div>

                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Köp nu!</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Köp nu!</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Köp nu!</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Köp nu!</a>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="bilder/EVGA-GeForce-GTX-1080-FTW-GAMING-ACX-3.0.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Köp nu!</a>
                            </div>
                        </div>

                    </div>
                </div>






                <footer></footer>
            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
</body>

</html>

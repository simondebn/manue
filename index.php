<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing - Free Bulma template</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/landing.css">
    <link rel="stylesheet" type="text/css" href="css/bulma-carousel.css">
</head>

<body>
<section class="hero is-fullheight has-carousel">
    <div class="hero-carousel carousel-animated carousel-animate-fade">
        <div class='carousel-container'>
            <div class='carousel-item has-background is-active'>
                <img class="is-background" src="https://via.placeholder.com/1920x1080.png" alt="" />
            </div>
            <div class='carousel-item has-background'>
                <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" />
            </div>
            <div class='carousel-item has-background'>
                <img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" />
            </div>
            <div class='carousel-item has-background'>
                <img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" />
            </div>
        </div>
        <div class="carousel-navigation is-overlay">
            <div class="carousel-nav-left">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="carousel-nav-right">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="hero-head">
        <nav class="navbar is-transparent">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
                </div>
                <div id="navbarMenuHeroA" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item has-text-white is-active">
                            Home
                        </a>
                        <a class="navbar-item has-text-white">
                            Examples
                        </a>
                        <a class="navbar-item has-text-white">
                            Documentation
                        </a>
                        <span class="navbar-item has-text-white">
              <a class="button is-primary is-inverted">
                <span class="icon">
                  <i class="fa fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body has-text-centered">
        <div class="columns is-mobile is-centered">
            <div class="column is-half is-narrow">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input" type="text" placeholder="Find a repository">
                    </div>
                    <div class="control">
                        <a class="button is-info">
                            Search
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul>
                    <li class="is-active"><a>Overview</a></li>
                    <li><a class="has-text-white">Modifiers</a></li>
                    <li><a class="has-text-white">Grid</a></li>
                    <li><a class="has-text-white">Elements</a></li>
                    <li><a class="has-text-white">Components</a></li>
                    <li><a class="has-text-white">Layout</a></li>
                </ul>
            </div>
        </nav>
    </div>-->
</section>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script async type="text/javascript" src="js/bulma.js"></script>
<script type="text/javascript" src="js/bulma-carousel.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A Colorado based design firm specializing in the unusual.">
<title>Grounded Earth</title>
<link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/pure-min.css">
<!--[if lte IE 8]>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
<link rel="stylesheet" href="//yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
<link rel="stylesheet" type="text/css" href="{{ @getenv("APP_URL") }}pure-layout-marketing/css/layouts/marketing.css">
<link rel="stylesheet" type="text/css" href="{{ @getenv("APP_URL") }}glidejs-master/dist/css/glide.core.min.css">
<link rel="stylesheet" type="text/css" href="{{ @getenv("APP_URL") }}css/styles.css">
<!--<![endif]-->
</head>
<body>
<div class="header">
  <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
    <a class="pure-menu-heading" href="">Grounded Earth</a>
    <ul class="pure-menu-list">
      <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Designs</a></li>
      <li class="pure-menu-item"><a href="#" class="pure-menu-link">Products</a></li>
      <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign Up</a></li>
    </ul>
  </div>
</div>
<div class="splash-container">
  <div class="splash">
    <div>
      <h1 class="splash-head">Grounded Earth</h1>
    </div>
    <p class="splash-subhead">We are a Colorado apparel and design company specializing in quality products at a fair price. We want to provide you with great gear as well as a positive attitude.</p>
    <p>
        <a href="#" class="pure-button pure-button-primary">Welcome.</a>
    </p>
  </div>
</div>
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Excepteur sint occaecat cupidatat.</h2>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Responsive Layouts
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Modular
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Plays Nice
                </h3>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div id="Glide" class="glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<">prev</button>
                <button class="glide__arrow next" data-glide-dir=">">next</button>
            </div>
            <div class="glide__wrapper">
                <ul class="glide__track">
                    @foreach($products as $product)
                        <li class='glide__slide'>
                            <img src='{{ @getenv("APP_URL") }}images/{{ $product->image }}'/>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="glide__bullets"></div>
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <h2 class="content-head content-head-ribbon">Check out these T's!</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor.
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <label for="name">Your Name</label>
                        <input id="name" type="text" placeholder="Your Name">
                        <label for="email">Your Email</label>
                        <input id="email" type="email" placeholder="Your Email">
                        <label for="password">Your Password</label>
                        <input id="password" type="password" placeholder="Your Password">
                        <button type="submit" class="pure-button">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contact Us</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        View the source of this layout to learn more. Made with love by the YUI Team.
    </div>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}stickerjs-master/sticker.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}glidejs-master/dist/glide.min.js"></script>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}js/validateSignup.js"></script>
<?php /*
* Load the driver for execution
*/ ?>
<script type="text/javascript" src="{{ @getenv("APP_URL") }}js/index_driver.js"></script>
</body>
</html>

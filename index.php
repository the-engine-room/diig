<?php
    $URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    include dirname(__FILE__) . '/AltoRouter.php';
    $router = new AltoRouter();

    $router->setBasePath('');

    $router->map('GET','/', 'views/homepage.php', 'homepage');
    $router->map('GET','/about/', 'views/about.php', 'about');


    $match = $router->match();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Data and Info for Improved Governance</title>
    <meta name="description" content="diig.io - Data and Info for Improved Governance">

    <script>
        (function () {

            document.documentElement.className = document.documentElement.className.replace(/(^|\\b)no\-js(\\b|$)/gi, 'has-js');

            svgSupported = (function () {
                var div = document.createElement('div');
                    div.innerHTML = '<svg/>';
                return (typeof SVGRect != 'undefined' && div.firstChild && div.firstChild.namespaceURI) == 'http://www.w3.org/2000/svg';
            }());

            if (svgSupported) {
                document.documentElement.className += ' has-svg';
            } else {
                document.documentElement.className += ' no-svg';
            }

            var isMobile = window.matchMedia && window.matchMedia('only screen and (max-width: 767px)').matches;

            if (isMobile) {
                document.documentElement.className += ' is-mobile';
            }

            var canvasSupported = (function () {
                var canvas = document.createElement('canvas');
                return !!(canvas.getContext && canvas.getContext('2d')) && canvas.toDataURL('image/png').indexOf('data:image/png') === 0;
            }());

            if (canvasSupported) {
                document.documentElement.className += ' has-canvas';
            } else {
                document.documentElement.className += ' no-canvas';
            }

        }());
    </script>

    <meta property="og:site_name" content="diig.io - Data and Info for Improved Governance" />
    <meta property="og:title" content="diig.io - Data and Info for Improved Governance" />

    <meta property="og:description" content="Tdiig.io - Data and Info for Improved Governance" />
    <meta property="og:url" content="<?php echo $URL ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/favicons/ogMain.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link rel="dns-prefetch" href="//gstatic.com">
    <link rel="dns-prefetch" href="//code.jquery.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

    <link rel="stylesheet" href="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.css" />
    <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Slab" rel="stylesheet">

    <!-- build:css /css/min.css -->
    <link rel="stylesheet" href="/css/global.css" />
    <!-- endbuild -->

</head>
<body<?php if($match[name] == 'homepage'){ echo ' class="App"'; } ?>>

    <header class="Header center-align<?php if($match[name] == 'about'){ ?> Header--plain<?php } ?>">
        <div class="Header-inner">

            <div class="row">
                <div class="col s12">
                    <h1 class="Header-title">
                        <a href="/">
                            <span class="Header-title--secondary">diig.io</span>
                            <span class="Header-title--primary">Data and info</span>
                            <span class="Header-title--tertiary">for improved governance</span>
                        </a>
                    </h1>
                </div>
                <div class="col s12 m6 offset-m3">
                    <p class="light Header-description"> The Engine Room and the Institute for Public Policy Research in Namibia worked in partnership to build a data model and searchable platform of petroleum exploration licenses in Namibia to power investigation and advocacy. In August of 2016, The Engine Room organized a “replication sprint” to document and clean the technical components of this project so they could be put to use for two other contexts. Working with Citizens for Justice and Oxfam in Malawi and the Zimbabwe Environmental Law Association in Zimbabwe, and learning from the lessons of the IPPR project, we have built two new platforms that allow for the exploration of licenses and companies in the mining sector in Malawi and Zimbabwe. We hope to continue providing support to other extractives transparency organisations looking to collect, clean, organise and analyse data to advocate for more just resource governance. We also hope to use replication sprint methods to make technology and data tools more accessible to frontline organisations. Get in touch with us if you want to learn more about our Matchbox Program, or other types of direct support we offer. </p>
                </div>
            </div>

        </div>
    </header>

    <?php

        if($match) {
            require $match['target'];
        }
        else {
            header("HTTP/1.0 404 Not Found");
            require 'views/404.php';
        }

    ?>

    <footer class="Footer">
        <div class="Footer-inner">
            <div class="row center-align Footer-logos">
                <div class="col s12 m10 offset-m1">
                    <p class="Footer-poweredBy">powered by</p>
                    <a href="https://www.theengineroom.org/" title="The engine room - Accelerating social change">
                        <img src="/images/dist/matchbox.png" alt="The engine room" width="844" height="261" class="Footer--matchbox" />
                    </a>
                </div>
                <div class="col s12 m10 offset-m1 Footer-info">
                    <a href="https://creativecommons.org/licenses/by-sa/4.0/" title="">
                        <img src="/images/dist/cc.png" alt="" width="117" height="33" class="Footer--cc" />
                    </a>
                    <a href="https://github.com/the-engine-room/diig/" title="GitHub repo">
                        <img src="/images/dist/github.png" alt="" width="126" height="32" class="Footer--github" />
                    </a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    <!-- build:js /js/min.js -->
    <script src="/js/vendor/burza/utils.js"></script>
    <script src="/js/main.plain.js"></script>
    <!-- endbuild -->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-82268240-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>

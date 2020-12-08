<?php

function getHeader($title) {
    return '<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>'.$title.'</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="/images/logosrota/New folder (4)//Colour logo tab_icon.png">
    <link rel="stylesheet" href="/assets/css/main.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144825636-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag(\'js\', new Date());

    gtag(\'config\', \'UA-144825636-4\');
    </script>

    <!-- Hotjar Tracking Code for http://manusathhanda.rotaractmora.org -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1811011,
                hjsv: 6
            };
            a = o.getElementsByTagName(\'head\')[0];
            r = o.createElement(\'script\');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, \'https://static.hotjar.com/c/hotjar-\', \'.js?sv=\');
    </script>
</head>';
}
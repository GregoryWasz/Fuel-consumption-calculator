<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Kalkulatory samochodowe</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->
        <h1><a href="index.html" id="logo">Super <em>Kalkulator Samochodowy</em></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Kalkulator Spalania</a></li>
                <li>Kalkulator 1</li>
                <li>Kalkulator 2</li>
                <li>Kalkulator 3</li>
            </ul>
        </nav>

    </div>

    <!-- Banner -->
    <section id="banner">
        <header>
            <h2><em>Dowiedz się więcej o samochodach</em></h2>
            <a href="#" class="button">Więcej!</a>
        </header>
    </section>
    <!-- Blok z moim kalkulatorem-->
    {block name = content} domyślny{/block}
        <!-- Footer -->
    <div id="footer">

        <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                <li>Calculators by Grzegorz Waszkowski</li>
            </ul>
        </div>

    </div>

</div>

<!-- Scripts -->
<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.dropotron.min.js"></script>
<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$conf->app_url}/assets/js/util.js"></script>
<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>
</html>
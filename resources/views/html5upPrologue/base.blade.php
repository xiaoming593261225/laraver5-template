<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Edgars Vylcāns</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="{{ asset('css/html5up-prologue/ie/html5shiv.js') }}"></script><![endif]-->
    <script src="{{ asset('js/html5up-prologue/jquery.min.js') }}"></script>
    <script src="{{ asset('js/html5up-prologue/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/html5up-prologue/jquery.scrollzer.min.js') }}"></script>
    <script src="{{ asset('js/html5up-prologue/skel.min.js') }}"></script>
    <script src="{{ asset('js/html5up-prologue/skel-layers.min.js') }}"></script>
    <script src="{{ asset('js/html5up-prologue/init.js') }}"></script>
    <script src="{{ asset('js/html5up-prologue/vylcans.js') }}"></script>
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/html5up-prologue/skel.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/html5up-prologue/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/html5up-prologue/style-wide.css') }}" />
    </noscript>
    <link rel="stylesheet" href="{{ asset('css/html5up-prologue/vylcans.css') }}" />
    <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('css/html5up-prologue/ie/v9.css') }}" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('css/html5up-prologue/ie/v8.css') }}" /><![endif]-->
</head>
<body>

<!-- Header -->
<div id="header" class="skel-layers-fixed">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
            <h1 id="title">Edgars Vylcāns</h1>
            <p>Fotogrāfijas</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

            -->
            <ul>
                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon">Intro</span></a></li>
                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon">Portfolio</span></a></li>
                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon">About Me</span></a></li>
                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon">Contact</span></a></li>
            </ul>
        </nav>

    </div>

    <div class="bottom">

        <!-- Social Icons -->
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>

    </div>

</div>


@yield('main_section')

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>&copy; Edgars Vylcāns, <?= date('Y'); ?>. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>

</div>

</body>
</html>
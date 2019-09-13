<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords"
          content="websijtje, website, web, web design, ui, ux, ui design, ux design, graphic design, cheap website, website cost, netherlands, amsterdam web agency, web agency, branding, startups">
    <meta name="description"
          content="websijtje, order a cheap website, modern business cards or launch your startup with us! we located all over the world.">
    <meta name="google-site-verification" content="O1APOhsfVeOlvidL5c2Yd7zDW8A68N5s8Sxr9JFDLh0"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap-4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=0.4.0">
    <title>Websijtje | Dutch Web agency!</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <h1 class="navbar-brand" href="{{ url('/') }}">
                {{--<img src="{{ asset('img/logotype-websijtje.png') }}" alt="" class="top-log-img">--}}
                Websijtje
            </h1>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left: auto !important; margin-right: 0 !important;">
                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="#who_we_are">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="#what_we_do">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="#packages">Packages</a>
                    </li>
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link smoothScroll" href="#works">Works</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Team</a>--}}
                    {{--</li>--}}
                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="cover">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="welcome-box">
                    <div class="title ">HELLO.</div>
                    <p class="">
                        You are not middle of the road, . You want to stand out and we can help you. We make nice
                        tailored websites that meet your needs and wishes. For a nice and unbeatable price. Why? Because
                        you deserve it.
                    </p>
                    {{--<button class="btn btn-colored action ">LETS START</button>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="cover-slider-container">
        <div class="cover-slider">
            <div class="slides">
                <div class="cover-slide third">
                    <div class="title">Websites & Apps</div>
                    <div class="icon">
                        <img src="{{ asset('img/icons/web_app.png') }}" alt="">
                    </div>
                    <div class="description">
                        You need a website, web application or mobile app?
                        just let us know! we will do it.
                    </div>
                    {{--<div class="link">--}}
                        {{--<a href="">See More</a>--}}
                    {{--</div>--}}
                </div>
                <div class="cover-slide second">
                    <div class="title">Start-Ups</div>
                    <div class="icon">
                        <img src="{{ asset('img/icons/web_app.png') }}" alt="">
                    </div>
                    <div class="description">
                        we have the experience of launching startups all over the world! so why not start your own
                        business with us?
                    </div>
                    {{--<div class="link">--}}
                        {{--<a href="">See More</a>--}}
                    {{--</div>--}}
                </div>
                <div class="cover-slide first">
                    <div class="title">Websites & Apps</div>
                    <div class="icon">
                        <img src="{{ asset('img/icons/web_app.png') }}" alt="">
                    </div>
                    <div class="description">
                        You need a website, web application or mobile app?
                        just let us know! we will do it.
                    </div>
                    {{--<div class="link">--}}
                        {{--<a href="">See More</a>--}}
                    {{--</div>--}}
                </div>
                <div class="cover-slide first">
                    <div class="title">Graphic Design</div>
                    <div class="icon">
                        <img src="{{ asset('img/icons/design.png') }}" alt="">
                    </div>
                    <div class="description">
                        Let's define ourselves! we can do anything in this field. illustration, logos, UI/UX design... even paintings!
                    </div>
                    {{--<div class="link">--}}
                        {{--<a href="">See More</a>--}}
                    {{--</div>--}}
                </div>
                <div class="cover-slide first">
                    <div class="title">Start-Ups</div>
                    <div class="icon">
                        <img src="{{ asset('img/icons/startups.png') }}" alt="">
                    </div>
                    <div class="description">
                        we have the experience of launching startups all over the world! so why not start your own
                        business with us?
                    </div>
                    {{--<div class="link">--}}
                        {{--<a href="">See More</a>--}}
                    {{--</div>--}}
                </div>
            </div>
            {{--<div class="cover-slide-controller">--}}
            {{--<div class="control prev"><</div>--}}
            {{--<div class="control next">></div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

<section class="about-us" id="who_we_are">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title-side ">Who We Are</div>
            </div>
            <div class="col-md-7">
                <div class="section-text-side ">
                    <a href="{{ url('/') }}">Websijtje.nl</a> is a Dutch/Iranian company. Founded after a 10 minute
                    encounter in the metro of Tehran
                    in September 2017.
                    <br>
                    We will make your website according to your wishes.
                    For a very competitive and unbeatable price. we are of course familiar with UX and
                    UI.
                    <br>
                    Your website will be hosted in Amsterdam.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what_we_do" id="what_we_do">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="section-title-center">
                    <span>What We Do</span>
                </div>
            </div>
        </div>
        <div class="row abilities">

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height ability-shape">
                            <div class="ability ability-1">
                                <img src="{{ asset('img/icons/web_app.png') }}" class="ability-icon" alt=""
                                     style="margin-top: 40px">
                            </div>
                            <div class="ability-icon">

                            </div>
                        </div>
                        <div class="col-md-6 ability-info">
                            <div class="ability-content">
                                <div>
                                    <h1 class="abilities-title">Websites & Apps</h1>
                                    <p class="abilities-description">
                                        You need a website, web application or mobile app?
                                        just let us know! we will do it.
                                    </p>
                                    {{--<a href="" class="ability-url">Portfolio</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height ability-shape">
                            <div class="ability ability-2">
                                <img src="{{ asset('img/icons/design.png') }}" class="ability-icon" alt=""
                                     style="margin-top: 28px">
                            </div>
                        </div>
                        <div class="col-md-6 ability-info">
                            <div class="ability-content">
                                <div>
                                    <h1 class="abilities-title">Graphic Design</h1>
                                    <p class="abilities-description">
                                        Let's define ourselves! we can do anything in this field. illustration, logos, UI/UX design... even paintings!
                                    </p>
                                    {{--<a href="" class="ability-url">Portfolio</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height ability-shape">
                            <div class="ability ability-3">
                                <img src="{{ asset('img/icons/startups.png') }}" class="ability-icon" alt=""
                                     style="width: 30%; float: right; margin-top: 30px">
                            </div>
                        </div>
                        <div class="col-md-6 ability-info">
                            <div class="ability-content">
                                <div>
                                    <h1 class="abilities-title">Start-Ups</h1>
                                    <p class="abilities-description">
                                        we have the experience of launching startups all over the world! so why not
                                        start your own
                                        business with us?
                                    </p>
                                    {{--<a href="" class="ability-url">Experiences</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height ability-shape">
                            <div class="ability ability-4">
                                <img src="{{ asset('img/icons/web_app.png') }}" class="ability-icon" alt=""
                                     style="margin-top: 40px">
                            </div>
                        </div>
                        <div class="col-md-6  ability-info">
                            <div class="ability-content">
                                <div>
                                    <h1 class="abilities-title">Branding</h1>
                                    <p class="abilities-description">
                                        Does your marketing and communication department still do what it needs to do to
                                        profile your organization properly, develop and distribute the right content?
                                        need help with this? we are here!
                                    </p>
                                    {{--<a href="" class="ability-url">Experiences</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{--<section class="works" id="works">--}}
{{--<div class="container ">--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<div class="section-title-center">--}}
{{--<span>Works</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row works-container">--}}
{{--<div class="container">--}}
{{--<ul class="nav nav-tabs work-tabs" id="myTab" role="tablist">--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link active" id="home-tab" data-toggle="tab" href="#websites" role="tab"--}}
{{--aria-controls="websites" aria-selected="true">Websites</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"--}}
{{--aria-controls="profile" aria-selected="false">Design</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="tab-content works-tabs-parts" id="myTabContent" style="width: 100%">--}}
{{--<div class="tab-pane fade show active" id="websites" role="tabpanel" aria-labelledby="home-tab"--}}
{{--style="width: 100%">--}}
{{--<div class="row">--}}

{{--<div class="col-lg-4 col-md-6 col-sm-12 col-sm-12 ">--}}
{{--<a href="#">--}}
{{--<div class="work-box website">--}}
{{--<div class="work-box-bg"--}}
{{--style="background-image: url('{{ asset('img/websites/1.jpg') }}')"></div>--}}
{{--<div class="work-box-header"><i class="far fa-ellipsis-h"></i></div>--}}
{{--<div class="work-info">--}}
{{--<div>--}}
{{--<div class="project-title">websijtje</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="col-lg-4 col-md-6 col-sm-12 col-sm-12 ">--}}
{{--<a href="#">--}}
{{--<div class="work-box website">--}}
{{--<div class="work-box-bg"--}}
{{--style="background-image: url('{{ asset('img/websites/2.jpg') }}')"></div>--}}
{{--<div class="work-box-header"><i class="far fa-ellipsis-h"></i></div>--}}
{{--<div class="work-info">--}}
{{--<div>--}}
{{--<div class="project-title">websijtje</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"--}}
{{--style="width: 100%">--}}
{{--<div class="row">--}}

{{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--<div class="work-box design">--}}
{{--<div class="work-box-bg"--}}
{{--style="background-image: url('{{ asset('img/designs/1.jpeg') }}')"></div>--}}
{{--<div class="work-info">--}}
{{--<div>--}}
{{--<div class="project-title">websijtje</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--<div class="work-box design">--}}
{{--<div class="work-box-bg"--}}
{{--style="background-image: url('{{ asset('img/designs/2.jpeg') }}')"></div>--}}
{{--<div class="work-info">--}}
{{--<div>--}}
{{--<div class="project-title">websijtje</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--<div class="work-box design">--}}
{{--<div class="work-box-bg"--}}
{{--style="background-image: url('{{ asset('img/designs/3.jpeg') }}')"></div>--}}
{{--<div class="work-info">--}}
{{--<div>--}}
{{--<div class="project-title">websijtje</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">--}}
{{--<div class="work-box design">--}}
{{--<div class="work-box-bg"--}}
{{--style="background-image: url('{{ asset('img/designs/4.jpeg') }}')"></div>--}}
{{--<div class="work-info">--}}
{{--<div>--}}
{{--<div class="project-title">websijtje</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

<section class="packages" id="packages">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="section-title-center">
                    <span>Pricing</span>
                </div>
                <p class="text-center">
                    Choose the plan that fits your needs.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row packages ">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="package-box package-1">
                    <div class="starter-price">
                        <span class="hint">starter price:</span>
                        <div class="price">€295</div>
                    </div>
                    <div class="package-title">PERSONAL</div>
                    <div class="package-options">
                        <ul>
                            <li>up to 2 pages</li>
                            <li>contact by Email</li>
                            <li>Social media integration</li>
                            <li>Image slider</li>
                            <li>Photo gallery</li>
                            <li>responsive design</li>
                            <li>customized template</li>
                        </ul>
                    </div>
                    <div class="maintenance-costs">
                        <div class="hint">Maintenance costs:</div>
                        <div>
                            <span class="price">€9</span>
                            <span class="period">
                            /month
                            </span>
                        </div>
                        <div>Or</div>
                        <div>
                            <span class="price">€90</span>
                            <span class="period">
                            /year
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="package-box package-2">
                    <div class="starter-price">
                        <span class="hint">starter price:</span>
                        <div class="price">€450</div>
                    </div>
                    <div class="package-title">BUSINESS</div>
                    <div class="package-options">
                        <ul>
                            <li>+ all from <span class="package-1-referrer">PERSONAL</span></li>
                            <li>3 extra landing pages</li>
                            <li>SEO</li>
                            <li>simple admin panel</li>
                            <li>Newsletter</li>
                            <li>mobile version</li>
                            <li>Google map display</li>

                        </ul>
                    </div>
                    <div class="maintenance-costs">
                        <div class="hint">Maintenance costs:</div>
                        <div>
                            <span class="price">€9</span>
                            <span class="period">
                            /month
                            </span>
                        </div>
                        <div>Or</div>
                        <div>
                            <span class="price">€90</span>
                            <span class="period">
                            /year
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="package-box package-3">
                    <div class="starter-price">
                        <span class="hint">starter price:</span>
                        <div class="price">€750</div>
                    </div>
                    <div class="package-title">BASIC</div>
                    <div class="package-options">
                        <ul>
                            <li>+ all from <span class="package-2-referrer">BUSINESS</span></li>
                            <li>5 extra landing pages</li>
                            <li>advanced management system</li>
                            <li>RSS news feed</li>
                            <li>Google webmaster tools</li>
                            <li>User Registration</li>
                            <li>Different user and admin roles</li>

                        </ul>
                    </div>
                    <div class="maintenance-costs">
                        <div class="hint">Maintenance costs:</div>
                        <div>
                            <span class="price">€9</span>
                            <span class="period">
                            /month
                            </span>
                        </div>
                        <div>Or</div>
                        <div>
                            <span class="price">€90</span>
                            <span class="period">
                            /year
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="package-box package-4">
                    <div class="starter-price">
                        <span class="hint">starter price:</span>
                        <div class="price">€1000</div>
                    </div>
                    <div class="package-title">ADVANCED</div>
                    <div class="package-options">
                        <ul>
                            <li>+ all from <span class="package-3-referrer">BASIC</span></li>
                            <li>Unique template design</li>
                            <li>unique design for icons</li>
                            <li>logo and covers design</li>
                            <li>Google analytics</li>
                            <li>Livechat</li>
                            <li>Email service</li>
                        </ul>
                    </div>
                    <div class="maintenance-costs">
                        <div class="hint">Maintenance costs:</div>
                        <div>
                            <span class="price">€9</span>
                            <span class="period">
                            /month
                            </span>
                        </div>
                        <div>Or</div>
                        <div>
                            <span class="price">€90</span>
                            <span class="period">
                            /year
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center">
                <p class="text-center  packages-description">
                    To make it easy for you we developed four packages. Each package has also three options. Easy and
                    clear.
                </p>
                <a href="mailto:ehsanfeyzolahi@gmail.com">
                    <button class="btn btn-colored action ">LETS START</button>
                </a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <div class="section-title-side">Contact</div>
            </div>
            <div class="col-md-7">
                {{--<table class="table">--}}
                {{--<tr>--}}
                {{--<th>Email</th>--}}
                {{--<td>contact@websijtje.nl</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<th>Skype</th>--}}
                {{--<td>contact@websijtje.nl</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                {{--<th>WhatsApp</th>--}}
                {{--<td>+98 935 706 2236</td>--}}
                {{--</tr>--}}
                {{--</table>--}}
                <div class="contact-box">
                    {{--<a href="http://t.me/soyEhsan" class="">--}}
                    {{--<i class="fab fa-telegram"></i>--}}
                    {{--<span>+98 935 706 2236</span>--}}
                    {{--</a>--}}
                    <a href="http://instagram.com/websijtje" class="" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <span>@websijtje</span>
                    </a>
                    <a href="mailto:ehsanfeyzolahi@gmail.com" class="" target="_blank">
                        <i class="far fa-envelope"></i>
                        <span>ehsanfeyzolahi@gmail.com</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('a.smoothScroll').click(function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var d = $(target).offset().top;
        $('html,body').animate({
            scrollTop: d
        }, 'slow');
    });

    function loadLoaders() {
        var scrolled = $(window).scrollTop();
        var wHeight = $(window).height();
        $('.').each(function () {
            var _this = $(this);

            var offset = _this.offset().top;
            if (wHeight + scrolled - 100 > offset) {
                setTimeout(function () {
                    _this.css({
                        'opacity': '1',
                        'top': '0'
                    });
                }, 400);
            }
        });
    }

    $(document).ready(function () {
        loadLoaders();
    });
    $(document).scroll(function () {
        loadLoaders();
    });
</script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap-4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=0.1.0">
    <title>websijtje</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logotype-websijtje.png') }}" alt="" class="top-log-img">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto" style="margin-left: auto !important; margin-right: 0 !important;">
                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="#who_we_are">Who We Are</a>
                    </li>
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Packages</a>--}}
                    {{--</li>--}}
                    <li class="nav-item">
                        <a class="nav-link smoothScroll" href="#works">Works</a>
                    </li>
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
        <div class="welcome-box">
            <div class="title loader-part">HELLO.</div>
            <p class="loader-part">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid, amet dicta esse molestias nesciunt
                optio porro quasi ullam. Itaque.
            </p>
            {{--<button class="btn btn-colored action loader-part">LETS START</button>--}}
        </div>
    </div>
</section>

<section class="about-us" id="who_we_are">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title-side loader-part">Who We Are</div>
            </div>
            <div class="col-md-7">
                <div class="section-text-side loader-part">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur cumque cupiditate
                    deleniti eaque enim, et hic id illo labore laudantium libero modi non nostrum odio pariatur quis quo
                    quod repellat rerum? Ad adipisci aliquam asperiores atque corporis dicta eligendi, eveniet ex harum
                    impedit, magni modi natus optio sapiente suscipit.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio officiis omnis, quidem quod rem
                    repudiandae tenetur vel! Exercitationem maxime pariatur placeat! Accusantium animi deserunt
                    doloribus ducimus incidunt nostrum reprehenderit similique.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what_we_do">
    <div class="container">
        <div class="row loader-part">
            <div class="col-md-12">
                <div class="section-title-center">
                    <span>What We Do</span>
                </div>
            </div>
        </div>
        <div class="row abilities">

            <div class="loader-part col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height">
                            <div class="ability ability-1">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ability-content">
                                <div>
                                    <div class="abilities-title">Websites & Apps</div>
                                    <p class="abilities-description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At facere omnis rerum?
                                        Animi
                                        assumenda consequuntur excepturi ipsam minima ratione reiciendis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loader-part col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height">
                            <div class="ability ability-2">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ability-content">
                                <div>
                                    <div class="abilities-title">Graphic Design</div>
                                    <p class="abilities-description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet libero, quod?
                                        A
                                        adipisci autem ex fugit ipsa natus necessitatibus voluptates?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loader-part col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height">
                            <div class="ability ability-3">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ability-content">
                                <div>
                                    <div class="abilities-title">Start-Ups</div>
                                    <p class="abilities-description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
                                        consequuntur
                                        cupiditate eum excepturi harum iusto magni minima officia officiis velit!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="loader-part col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="box">
                    <div class="row full-height">
                        <div class="col-md-6 full-height">
                            <div class="ability ability-4">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ability-content">
                                <div>
                                    <div class="abilities-title">Branding</div>
                                    <p class="abilities-description">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ducimus ex
                                        ipsam
                                        iste labore nam omnis repudiandae rerum sunt vero!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="works" id="works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-center">
                    <span>Works</span>
                </div>
            </div>
        </div>
        <div class="row">
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5 loader-part">
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
                    <a href="" class="loader-part">
                        <i class="fab fa-whatsapp"></i>
                        <span>+98 935 706 2236</span>
                    </a>
                    <a href="http://t.me/soyEhsan" class="loader-part">
                        <i class="fab fa-telegram"></i>
                        <span>+98 935 706 2236</span>
                    </a>
                    <a href="" class="loader-part">
                        <i class="fab fa-instagram"></i>
                        <span>@websijtje</span>
                    </a>
                    <a href="" class="loader-part">
                        <i class="far fa-envelope"></i>
                        <span>contact@websijtje.nl</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
<script>
    $('a.smoothScroll').click(function (e) {
        e.preventDefault();
        var target = $(this).attr('href');
        var d = $(target).offset().top;
        $('html,body').animate({
            scrollTop: d
        }, 'slow')
    });

    function loadLoaders() {
        var scrolled = $(window).scrollTop();
        var wHeight = $(window).height();
        $('.loader-part').each(function () {
            var _this = $(this)

            var offset = _this.offset().top;
            if (wHeight + scrolled > offset) {
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
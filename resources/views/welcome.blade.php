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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=0.0.4">
    <title>websijtje</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/logotype-websijtje.png') }}" alt="" class="top-log-img">
            </a>

            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<ul class="navbar-nav mr-auto" style="margin-left: auto !important; margin-right: 0 !important;">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Who We Are</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Packages</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Our Works</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">Team</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Contact</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </nav>
</header>

<section class="cover">
    <div class="container">
        <div class="welcome-box">
            <div class="title">HELLO.</div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquid, amet dicta esse molestias nesciunt
                optio porro quasi ullam. Itaque.
            </p>
            <button class="btn btn-dark action">LETS START</button>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title-side">Who We Are</div>
            </div>
            <div class="col-md-7">
                <div class="section-text-side">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, commodi corporis debitis
                    distinctio
                    earum eligendi exercitationem expedita illo, magni nam obcaecati officiis qui quia velit, veniam.
                    Assumenda at nisi saepe.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-center">
                    <span>What We Do</span>
                </div>
            </div>
        </div>
        <div class="row abilities">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class="box"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class="box"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class="box"></div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                <div class="box"></div>
            </div>
        </div>
    </div>
</section>

<section class="packages">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-center">
                    <span>Packages</span>
                </div>
            </div>
        </div>
        <div class="row packages">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 package-parent" id="package-1">
                <div class="box hover">
                    <div class="box-header">
                        <i class="fas fa-angle-left close-package" style="display: none;"></i>
                    </div>
                    <div class="package-price">295</div>
                    <div class="package-description" style="display: none; opacity: 0">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, commodi consectetur
                            cupiditate deserunt dolore, earum enim est incidunt inventore ipsum iste labore nihil
                            numquam obcaecati quos reiciendis rerum, sit totam?
                        </p>
                    </div>
                    <div class="box-footer">
                        <i class="fas fa-ellipsis-h open_package_info" data-target="#package-1"></i>
                    </div>
                </div>
                <div class="open_package_info" data-target="#package-1" style="cursor: pointer">
                    <div class="package-title">Read more</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 package-parent" id="package-2">
                <div class="box hover">
                    <div class="box-header">
                        <i class="fas fa-angle-left close-package" style="display: none;"></i>
                    </div>
                    <div class="package-price">450</div>
                    <div class="package-description" style="display: none; opacity: 0">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, commodi consectetur
                            cupiditate deserunt dolore, earum enim est incidunt inventore ipsum iste labore nihil
                            numquam obcaecati quos reiciendis rerum, sit totam?
                        </p>
                    </div>
                    <div class="box-footer">
                        <i class="fas fa-ellipsis-h open_package_info" data-target="#package-2"></i>
                    </div>
                </div>
                <div class="open_package_info" data-target="#package-2" style="cursor: pointer">
                    <div class="package-title">Read more</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 package-parent" id="package-3">
                <div class="box hover">
                    <div class="box-header">
                        <i class="fas fa-angle-left close-package" style="display: none;"></i>
                    </div>
                    <div class="package-price">750</div>
                    <div class="package-description" style="display: none; opacity: 0">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, commodi consectetur
                            cupiditate deserunt dolore, earum enim est incidunt inventore ipsum iste labore nihil
                            numquam obcaecati quos reiciendis rerum, sit totam?
                        </p>
                    </div>
                    <div class="box-footer">
                        <i class="fas fa-ellipsis-h open_package_info" data-target="#package-3"></i>
                    </div>
                </div>
                <div class="open_package_info" data-target="#package-3" style="cursor: pointer">
                    <div class="package-title">Read more</div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 package-parent" id="package-4">
                <div class="box hover">
                    <div class="box-header">
                        <i class="fas fa-angle-left close-package" style="display: none;"></i>
                    </div>
                    <div class="package-price">1000</div>
                    <div class="package-description" style="display: none; opacity: 0">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, commodi consectetur
                            cupiditate deserunt dolore, earum enim est incidunt inventore ipsum iste labore nihil
                            numquam obcaecati quos reiciendis rerum, sit totam?
                        </p>
                    </div>
                    <div class="box-footer">
                        <i class="fas fa-ellipsis-h open_package_info" data-target="#package-4"></i>
                    </div>
                </div>
                <div class="open_package_info" data-target="#package-4" style="cursor: pointer">
                    <div class="package-title">Read more</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
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
                    <a href="">
                        <i class="fab fa-whatsapp"></i>
                        <span>+98 935 706 2236</span>
                    </a>
                    <a href="http://t.me/soyEhsan">
                        <i class="fab fa-telegram"></i>
                        <span>+98 935 706 2236</span>
                    </a>
                    <a href="">
                        <i class="fab fa-skype"></i>
                        <span>contact@websijtje.nl</span>
                    </a>
                    <a href="">
                        <i class="far fa-envelope"></i>
                        <span>contact@websijtje.nl</span>
                    </a>
                    <a href="tel:+989357062236">
                        <i class="far fa-phone"></i>
                        <span>+98 935 706 2236</span>
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
    function openPackage(packageId) {
        var el = $(packageId);
        $('.package-parent').hide();
        $('.package-parent').css('opacity', '0');
        el.css('opacity', '1');
        el.show();
        el.addClass('active');
        el.find('.package-description').show();
        setTimeout(function () {
            el.find('.package-description').css('opacity', '1');
            el.find('.box').css({
                'height': 'auto'
            });
        }, 300);
        el.find('.package-price').hide();
        el.find('.close-package').show();
    }

    function closePackages() {
        //responsive
        var el = $('.package-parent');
        el.removeClass('active');
        el.css({
            'opacity': '0'
        });
        setTimeout(function () {
            el.show();
            el.find('.package-description').css('opacity', '0');
            el.find('.box').css({
                'height': '200px'
            });
            setTimeout(function () {
                el.css('opacity', '1');
            }, 100);
        }, 300);
        $('.package-description').hide();
        el.find('.package-price').show();
        el.find('.close-package').hide();

    }

    $('.open_package_info').click(function () {
        var target = $(this).data('target');
        openPackage(target);
    });
    $('.close-package').click(function () {
        closePackages();
    });
</script>
</body>
</html>
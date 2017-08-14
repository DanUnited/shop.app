<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/normalize.css" rel=stylesheet>
    <link href="{{ elixir('css/app.css')}}" rel=stylesheet>
    <title>SHOP</title>
</head>
<body>
<nav class="navbar navbar-default margin-0">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-3 padding-0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LOGO</a>
            </div>
        </div>
        <div class="col-md-9 padding-0">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Subscribes List <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Active Subscribes</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-bell blue"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue" data-toggle="dropdown" role="button"
                           aria-haspopup="true"
                           aria-expanded="false">
                            <span class="glyphicon glyphicon-user "></span> MyAccount <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
<header>
        <span class="header">

        </span>
</header>
<div class="container padding-0">
    <div class="row">
        <div class="col-xs-12 col-md-3">
            <nav class="navbar-default sidebar" role="navigation">
                <div class="container-fluid">
                    <!--мобильная кнопка развораивания меню -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--end mobile button -->
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav vmenu">
                            <li class="vmenu__item green">Categories</li>
                            <li class="vmenu__dropdown ">
                                <a href="#" data-toggle="collapse" data-target="#demo" class="vmenu__item blue">E-commerce
                                    <b
                                            class="caret"></b></a>
                                <ul id="demo" class="collapse vmenu__submenu">
                                    <li class="vmenu__submenu__item"><a href="#">Marketing</a></li>
                                    <li class="vmenu__submenu__item"><a href="#">Content</a></li>
                                    <li class="vmenu__submenu__item"><a href="#">Enterprise</a></li>
                                </ul>
                            </li>
                            <li class="vmenu__item">Syncronization</li>
                            <li class="vmenu__item">Other Category</li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <main class="col-xs-12 col-md-9">
            <main>
                <section class="subscription">
                    <img alt="IMAGE" class="subscription__img">
                    <h3 class="subscription__h">Subscription</h3>
                    <div class="subscription__label subscription__label_best">best seller</div>
                    <div class="subscription__describe">
                        <p>from $99.99 / month</p>
                        <p>Free trial 30 days</p>
                    </div>
                </section>
                <section class="subscription">
                    <img alt="IMAGE" class="subscription__img">
                    <h3 class="subscription__h">Subscription</h3>
                    <div class="subscription__label subscription__label_new">New</div>
                    <div class="subscription__describe">
                        <p>from $99.99 / month</p>
                        <p>Free trial 30 days</p>
                    </div>
                </section>
                <section class="subscription">
                    <img alt="IMAGE" class="subscription__img">
                    <h3 class="subscription__h">Subscription</h3>
                    <div class="subscription__describe">
                        <p>Free</p>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>
</body>
<script src=/js/jquery.min.js></script>
<script src=/js/bootstrap.min.js></script>
</html>

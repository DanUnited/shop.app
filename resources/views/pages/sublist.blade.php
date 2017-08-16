@extends('basis')
@section('content')
    <header>
        <span class="header">
            <h1>Subscription List</h1>
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
                                        <b class="caret"></b></a>
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
                <a href="/subscription">
                    <section class="subscription">
                        <img alt="IMAGE" class="subscription__img">
                        <h3 class="subscription__h">Subscription</h3>
                        <div class="subscription__label subscription__label_best">best seller</div>
                        <div class="subscription__describe">
                            <p>from $99.99 / month</p>
                            <p>Free trial 30 days</p>
                        </div>
                    </section>
                </a>
                <a href="/subscription">
                    <section class="subscription">
                        <img alt="IMAGE" class="subscription__img">
                        <h3 class="subscription__h">Subscription</h3>
                        <div class="subscription__label subscription__label_new">New</div>
                        <div class="subscription__describe">
                            <p>from $99.99 / month</p>
                            <p>Free trial 30 days</p>
                        </div>
                    </section>
                </a>
                <a href="/subscription">
                    <section class="subscription">
                        <img alt="IMAGE" class="subscription__img">
                        <h3 class="subscription__h">Subscription</h3>
                        <div class="subscription__describe">
                            <p>Free</p>
                        </div>
                    </section>
                </a>
            </main>
        </div>
    </div>
@endsection
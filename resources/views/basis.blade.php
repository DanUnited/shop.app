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
                <a class="navbar-brand" href="/">LOGO</a>
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
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-bell blue"></span>
                        </a>
                        <ul class="dropdown-menu dropdown_notice">
                            <li class="dropdown_notice_item">
                                <div></div>
                                <div class="dropdown_notice_close">x</div>
                                <a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</a>
                            </li>
                            <li class="dropdown_notice_item dropdown_notice_item">
                                <div class="dropdown_notice_close">x</div>
                                <a>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</a>
                            </li>
                        </ul>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle blue" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user "></span> MyAccount <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Your Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
@yield('content')
</body>
<script src=/js/jquery.min.js></script>
<script src=/js/bootstrap.min.js></script>
</html>

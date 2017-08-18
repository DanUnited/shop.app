@extends('basis')

@section('body-class','background-gray')

@section('content')
    <div class="container">
        <div class="col-lg-3 col-md-4 col-xs-12 aside__left">
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav vmenu-b">
                    <li class="vmenu-b__header">Settings</li>
                    <li class="vmenu-b__item"><a href="#">Profile</a></li>
                    <li class="vmenu-b__item"><a href="#">Security</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav vmenu-b">
                    <li class="vmenu-b__header">Billing</li>
                    <li class="vmenu-b__item active"><a href="#">Payment Method</a></li>
                    <li class="vmenu-b__item"><a href="#">Invoices</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12 content">

        </div>
    </div>
@endsection
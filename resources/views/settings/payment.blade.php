@extends('settings.master')
@section('container')
    <h3>Update Payment Method</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-8 credit-card_padding">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-body">
                        <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER</label>
                                        <div class="input-group">
                                            <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-md-7">
                                    <div class="form-group">
                                        <label for="expityMonth">EXPIRY DATE</label>
                                        <div class="col-xs-6 col-lg-6 credit-card_padding">
                                            <input type="text" class="form-control" id="expityMonth" placeholder="MM" required/>
                                        </div>
                                        <div class="col-xs-6 col-lg-6 credit-card_padding">
                                            <input type="text" class="form-control" id="expityYear" placeholder="YY" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">CV CODE</label>
                                        <input type="password" class="form-control" id="cvCode" placeholder="CV" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-4">
                                    <div class="form-group">
                                        <label for="couponCode">ZIP / POSTAL CODE</label>
                                        <input type="text" class="form-control" name="couponCode"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <button class="subscribe btn btn-success btn-lg btn-block" type="submit">
                                        Update
                                    </button>
                                </div>
                            </div>
                            <div class="row" style="display:none;">
                                <div class="col-xs-12">
                                    <p class="payment-errors"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CREDIT CARD FORM ENDS HERE -->
            </div>
        </div>
    </div>
    <h3>Redeem Coupon</h3>
    <div class="col-xs-12 col-md-8 credit-card_padding">
        <div class="panel panel-default credit-card-box">
            <div class="panel-body">
                <form name="reedeem" method="POST">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label for="cardNumber">Coupon Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="coupon_code" required autofocus/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <div class="form-group">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="submit">
                                    REDEEM
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
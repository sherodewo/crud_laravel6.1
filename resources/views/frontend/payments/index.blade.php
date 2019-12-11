<html>
<head>
    <title>ChibiTrans</title>
    <link rel="stylesheet" href="{{asset('css/order.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand float-left" href="#">ChibiTrans</a>


    </div>
</nav>
<section class="gradient-primary rounded-circle" style="min-height: 300px">
</section>
<section style="margin-top: -250px">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="section-padding-body">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title-ob">
                                    <h4> Booking Details</h4>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <label> Route</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" placeholder="Route" disabled>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <label> Date</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" placeholder="Date" disabled>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <label> Time</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" placeholder="Time" disabled>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-3">
                                <label> Seat Quantity</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" placeholder="Quantity" disabled>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-padding-body-af">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title-ob">
                                    <h4> Payment Details</h4>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label><span class="paymentcount">1</span> x <span class="price">160,000</span></label>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label> Subtotal</label>
                            </div>
                            <div class="col-md-9"><label class="price2 value-data">160,000</label></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label> Discount</label>
                            </div>
                            <div class="col-md-9"><label class="price-discount value-data">15,000</label></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <label> Total</label>
                            </div>
                            <div class="col-md-9"><label class="sub-total value-data">145,000</label></div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <h4> Voucher</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" id="voucherCode" name="voucher" class="form-control" style="margin-bottom:12px;">
                            </div>
                            <div class="col-md-3">
                                <input type="button" id="buttonCheckVoucher" class="btn btn-primary btn-lg" value="Check" style="margin-right: 8px;width: 90px;padding: 5px 5px 5px 5px;"> <span id="voucherValid"></span>
                            </div>
                        </div>
                    </div>
                </section>

                <hr>
                <section class="section-padding-body">
                    <div class="container cust-detail">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title-ob">
                                    <h4> Customer Information</h4>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                        <form id="formRegister" novalidate="novalidate">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="nama" name="nama" class="form-control" required="required" aria-required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" id="email" name="email" class="form-control" required="required" aria-required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Phone Number</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="telepon" name="telepon" class="form-control number" required="required" aria-required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-push-4 margintop15">
                                        <input id="payNow" type="hidden" name="payNow" class="payNow">
                                        <input type="hidden" name="manifest" class="manifest" value="375182">
                                        <input type="hidden" name="shelterDepartureId" class="shelterDepartureId" value="6">
                                        <input type="hidden" name="seat" class="seat" value="5">
                                        <input type="hidden" id="promoCode">
                                        <input type="hidden" id="normalPrice" value="160000">
                                        <input type="hidden" id="totalDiscount" value="15000">
                                        <input type="hidden" id="totalPayment" value="145000">
                                        <!-- <button class="btn btn-primary btn-lg btn-register">Register</button> -->
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </section>
            </div><br><br>
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <section id="payment-method" class="section-padding-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section-title-ob">
                                <h4> Payment Method</h4>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="container">
                        <div class="option-payment-method" style="height:0%; ">
                            <div id="paymentMethValid" class="alert alert-danger" role="alert" style="display: none;"> </div>
                            <div class="form-group row payment-method " style="vertical-align: middle; background-color: #fff">
                                <div class="col-md-7 col-form-label">
                                    <div class="iradio_square-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input id="1" type="radio" class="minimal" name="payMethodRadio" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="1" class="label-form"> &nbsp;&nbsp;Credit Card</label>
                                </div>
                                <div class="col-md-5">
                                    <img src="https://www.cititrans.co.id/static/image/online/payment/visa-master.jpg" align="right">
                                </div>
                            </div><br><div class="form-group row payment-method " style="vertical-align: middle; background-color: #fff">
                                <div class="col-md-7 col-form-label">
                                    <div class="iradio_square-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input id="6" type="radio" class="minimal" name="payMethodRadio" value="6" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="6" class="label-form"> &nbsp;&nbsp;BCA Virtual Account</label>
                                </div>
                                <div class="col-md-5">
                                    <img src="https://www.cititrans.co.id/static/image/online/payment/bca-va.png" align="right">
                                </div>
                            </div><br><div class="form-group row payment-method " style="vertical-align: middle; background-color: #fff">
                                <div class="col-md-7 col-form-label">
                                    <div class="iradio_square-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input id="5" type="radio" class="minimal" name="payMethodRadio" value="5" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="5" class="label-form"> &nbsp;&nbsp;GO-PAY</label>
                                </div>
                                <div class="col-md-5">
                                    <img src="https://www.cititrans.co.id/static/image/online/payment/gopay.jpg" align="right">
                                </div>
                            </div><br><div class="form-group row payment-method " style="vertical-align: middle; background-color: #fff">
                                <div class="col-md-7 col-form-label">
                                    <div class="iradio_square-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input id="7" type="radio" class="minimal" name="payMethodRadio" value="7" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="7" class="label-form"> &nbsp;&nbsp;Mandiri Virtual Account</label>
                                </div>
                                <div class="col-md-5">
                                    <img src="https://www.cititrans.co.id/static/image/online/payment/mandiri-va.png" align="right">
                                </div>
                            </div><br><div class="form-group row payment-method " style="vertical-align: middle; background-color: #fff">
                                <div class="col-md-7 col-form-label">
                                    <div class="iradio_square-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input id="8" type="radio" class="minimal" name="payMethodRadio" value="8" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="8" class="label-form"> &nbsp;&nbsp;BNI Virtual Account</label>
                                </div>
                                <div class="col-md-5">
                                    <img src="https://www.cititrans.co.id/static/image/online/payment/bni-va.png" align="right">
                                </div>
                            </div><br><div class="form-group row payment-method " style="vertical-align: middle; background-color: #fff">
                                <div class="col-md-7 col-form-label">
                                    <div class="iradio_square-red" aria-checked="false" aria-disabled="false" style="position: relative;"><input id="9" type="radio" class="minimal" name="payMethodRadio" value="9" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    <label for="9" class="label-form"> &nbsp;&nbsp;Permata Virtual Account</label>
                                </div>
                                <div class="col-md-5">
                                    <img src="https://www.cititrans.co.id/static/image/online/payment/permata-va.png" align="right">
                                </div>
                            </div><br></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark">
    <div class="container py-5">
        <div class="row text-white text-center text-md-left">
            <div class="col-lg-2">
                <h4>Lainya</h4>
                <p>Shuttle</p>
                <p><a href="https://www.daytrans.co.id/tentang" class="text-white">Tentang </a></p>
                <p><a href="https://www.daytrans.co.id/bayar" class="text-white">Cara Bayar </a></p>
                <p><a href="https://www.daytrans.co.id/kebijakan-privasi" class="text-white">Kebijakan Privasi</a></p>
            </div>

            <div class="col-lg-4">
                <h4>Kontak</h4>
                <p><i class="fas fa-map-marker-alt pr-2"></i> Jl Deplu Raya No.43 Bintaro, Pesanggrahan Jakarta Selatan 12320</p>
                <p><i class="fas fa-phone pr-2"></i> 62 21 3029 6767</p>
                <p><i class="fas fa-envelope pr-2"></i> callcentre@cititrans.co.id</p>
            </div>
            <div class="col-lg-3">
                <h4>Call Center</h4>
                <p><i class="fab fa-whatsapp pr-2"></i> 08558556767  (Whatsapp)</p>
            </div>


            <div class="col-lg-3 mt-auto mb-auto text-white ">
                <p class="text-center text-md-right"><img src=https://bitgroup.co.id/wp-content/uploads/2015/01/thumb-cititrans-1.png" class="img-fluid" width="200px"></p>
            </div>

            <div class="col-lg-6 pt-5 text-white">
                <h3 class="text-center text-md-right pb-0 mb-0">
                    <a target="blank_" href="https://www.instagram.com/daytrans.official/" class="text-white"><i class="fab fa-instagram pr-4 fa-sm"></i></a>
                </h3>
            </div>
            <div class="col-lg-6 pt-5 text-white">
                <p class="text-center text-md-right pb-0 mb-0">Copyright 2019 CitiTrans</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
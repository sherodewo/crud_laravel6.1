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
    <div class="bg-ilustration" style="min-height: 300px">
<img src="https://butskibutong.files.wordpress.com/2010/12/services-banner.png?w=10840" class="img-backgorund">
    </div>
</section>
<section style="margin-top: -250px">
    <div class="container">
        <div class="col-md-12 mb-3">
            <p class="text-white mb-2">Pesan Tiket Anda Sekarang !!!</p>
        </div>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="card">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-4">
                        <span class="form1">Tanggal Keberangkatan</span>
                        <input type="date" class="mb-2 form-control-lg form-control">
                    </div>
                    <div class="form-group col-4">
                        <span class="form1">City</span>
                        <select class="mb-2 form-control-lg form-control" id="dari">
                            <option value="PASTEUR">PASTEUR</option>
                            <option value="DU">DIPATI UKUR</option>
                        </select>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <span class="form1">Location</span>
                        <select class="mb-2 form-control-lg form-control" id="destination">
                            <option></option>
                        </select>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <span class="form1">Routes</span>
                        <select class="mb-2 form-control-lg form-control" id="destination">
                            <option></option>
                        </select>
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <span class="form1">Penumpang</span>
                        <select class="mb-2 form-control-lg form-control" id="destination">
                            <option value=1>1</option>
                            <option value=2>2</option>
                        </select>
                        </select>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a href="/seat" class="btn btn-primary">Submit</a>
                </div>
            </div>
        </div>

        </form>
        <div class="col-12">
            <p class="text-white mt-3 text-spr-promo">Super Promo </p>
        </div>
        <div class="col-12 mb-5">
            <div class="row mx-0 px-0">
                <div class="card promo" style="margin-left:-1cm;margin-right: 0.5cm">
                    <div class="card-body pt-4">
                        <div class="row mx-0">
                            <div class="col-5 px-0">
                                <h4 class="color-primary">Rp 39,900</h4>
                                <p class="mb-0 text-grey-dark"><small class="font-weight-bold">Promo Bus 39K</small></p>
                            </div>
                            <div class="col-7 px-0 mt-auto mb-auto">
                                <p class="text-right mb-0"><small>07:00 - 07:00 <br>22/02/2019 - 31/12/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="rd-flex flex-row">
                            <div class="flex-fill p-2 mt-auto  mb-auto px-0">
                                <p class="font-weight-normal text-muted text-uppercase mb-0"><small>CIHAMPELAS - TANG CITY</small></p>
                            </div>
                            <p class="text-right mb-0"><button class="btn btn-radius btn-sm btn-danger  px-4 font-weight-bold" tabindex="0">PILIH</button></p>
                        </div>
                    </div>
                </div>
                <div class="card promo" style="margin-right: 0.5cm">
                    <div class="card-body pt-4">
                        <div class="row mx-0">
                            <div class="col-5 px-0">
                                <h4 class="color-primary">Rp 39,900</h4>
                                <p class="mb-0 text-grey-dark"><small class="font-weight-bold">Promo Bus 39K</small></p>
                            </div>
                            <div class="col-7 px-0 mt-auto mb-auto">
                                <p class="text-right mb-0"><small>07:00 - 07:00 <br>22/02/2019 - 31/12/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="rd-flex flex-row">
                            <div class="flex-fill p-2 mt-auto  mb-auto px-0">
                                <p class="font-weight-normal text-muted text-uppercase mb-0"><small>CIHAMPELAS - TANG CITY</small></p>
                            </div>
                            <p class="text-right mb-0"><button class="btn btn-radius btn-sm btn-danger  px-4 font-weight-bold" tabindex="0">PILIH</button></p>
                        </div>
                    </div>
                </div>
                <div class="card promo" style="margin-right: -1cm">
                    <div class="card-body pt-4">
                        <div class="row mx-0">
                            <div class="col-5 px-0">
                                <h4 class="color-primary">Rp 39,900</h4>
                                <p class="mb-0 text-grey-dark"><small class="font-weight-bold">Promo Bus 39K</small></p>
                            </div>
                            <div class="col-7 px-0 mt-auto mb-auto">
                                <p class="text-right mb-0"><small>07:00 - 07:00 <br>22/02/2019 - 31/12/2019</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="rd-flex flex-row">
                            <div class="flex-fill p-2 mt-auto  mb-auto px-0">
                                <p class="font-weight-normal text-muted text-uppercase mb-0"><small>CIHAMPELAS - TANG CITY</small></p>
                            </div>
                            <p class="text-right mb-0"><button class="btn btn-radius btn-sm btn-danger  px-4 font-weight-bold" tabindex="0">PILIH</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="form-group" src="https://2.bp.blogspot.com/-9ELuK3C5FbY/VtYwautou3I/AAAAAAAAH_g/lEqz9Y_5paY/s1600/Nomor-Call-Center-Customer-Service-Cititrans.jpg">

            </div>
            <div class="col-md-6 mt-auto mb-auto  text-center text-md-left py-3">
                <h3 class="color-primary font-weight-bold">Berpergian bersama ChibiTrans Shuttle</h3>
                <p class="text-muted">rasakan pengalaman perjalanan yang  menyenangkan dengan ChibiTrans Shuttle, dapatkan fasilitas - fasilitas berikut ini</p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">Ergonomis</h5>
                    <p>Selain memilih nomor kursi sesuai privasi, bentuk kursi yang ergonomis, sandaran tangan dan ruang kaki yang luas, Anda dapat mengatur sendiri sandaran kursi.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">Lampu Baca   </h5>
                    <p>Di unit kami tersedia lampu baca di atas tempat duduk sehingga Anda bisa membaca di malam hari tanpa mengganggu kenyamanan penumpang di sebelah Anda.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">Air Conditioner</h5>
                    <p>Air Conditioner dengan sistem ducting yang ada pada setiap unit kami dapat disesuaikan arah keluarnya dari tempat Anda duduk secara personal.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">GPS Tracking System</h5>
                    <p>  Unit Day Trans dilengkapi dengan GPS Tracking System yang memungkinkan Anda untuk mengetahui di mana dan berapa lama lagi Anda akan sampai di tujuan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">Safety Belt</h5>
                    <p>  Sabuk pengaman sesuai standar keselamatan telah disediakan untuk mengantarkan Anda sampai ke tempat tujuan dengan aman dan selamat.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">Sajian Musik</h5>
                    <p>  Alunan musik yang pas akan memberikan perasaan nyaman dan tenang. Musik akan diputar di beberapa waktu awal dan akhir perjalanan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-hover card-body text-muted">
                    <h5 class="font-weight-normal">Mesin Ramah Lingkungan</h5>
                    <p>  Alunan musik yang pas akan memberikan perasaan nyaman dan tenang. Musik akan diputar di beberapa waktu awal dan akhir perjalanan.</p>
                </div>
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
<script>

    $('#dari').each(function(){
        if (this.selected){
            let from;
            from = $('#dari').val()
            if (from == "DU"){
                $('#destination').val("wew")
            }

        }


    })

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
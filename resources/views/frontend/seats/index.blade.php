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
            <p class="text-white mb-2">Select Schedule</p>
        </div>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="card">
                <div class="card-body">
                    <div class="form-row col-12">
                        <div class="form-group col-1">
                           <button class="btn btn-warning">09.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">10.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">11.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">14.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">15.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">16.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">17.30</button>
                        </div>
                        <div class="form-group col-1">
                            <button class="btn btn-warning">18.30</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <p class="text-white mb-2">Select Seat</p>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-row col-8">
                        <div class="form-group col-1">
                            <button class="btn btn-primary">1</button>
                        </div>
                        <div class="form-group col-2">
                            <button class="btn btn-primary col-9">2</button>
                            <button class="btn btn-primary col-9 mt-2">3</button>
                        </div>
                        <div class="form-group col-2">
                            <button class="btn btn-primary col-9">4</button>
                            <button class="btn btn-primary col-9 mt-2">5</button>
                        </div>
                        <div class="form-group col-3">
                            <button class="btn btn-primary col-6">6</button>
                            <button class="btn btn-primary col-6 mt-2">8</button>
                            <button class="btn btn-primary col-6 mt-2">7</button>
                        </div>

                    </div>
                    <div class="col">
                        <a href="/payment" style="width: 200px" class="float-right btn btn-warning">NEXT</a>
                    </div>
                </div>
            </div>

        </form>
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
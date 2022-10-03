@extends('../layout/main')
@section('head')
<link rel="stylesheet" href="/css/landing-page/navbar.css">
<link rel="stylesheet" href="/css/landing-page/beranda.css">
<link rel="stylesheet" href="/css/buyer/home.css">
<title>Beranda | Home Buy Now</title>
@endsection

@section('container')
<div id="header">
    <div class="full-container bg-dark">
        <div class="container py-2">
            @include('../landing-page/components/navbar')
        </div>

        

        <div class="text-center d-none">
            <h1 class="text-white">Rumah adalah tempat dimana kamu bisa menjadi dirimu sendiri</h1>
        </div>


    </div>

    <div>
        <h1 id="text-banner" class="text-white">HOME BUY NOW</h1>
    </div>
    

    <div id="logo">
        <img src="/img/logo-dmprolinks.png">
    </div>

    <div class="car d-none">
        <img src="/img/car-yellow.png" alt="" id="car1">
        <img src="/img/jeep-green.png" alt="" id="car2">
    </div>
</div>
<div id="content" class="container">
    <h1>Rumah Pilihan</h1>
    <div class="row mb-5">
        <div class="col-md-10">
            <p>Rekomendasi pilihan kami untuk Anda. Dari rumah minimalis, ruko strategis, sampai apartemen modern. Semua terjamin resmi.</p>
        </div>
        <div class="col-md-2">
            <a href="/primary" class="btn bg-light-blue-1 text-white">Lihat Lainnya &rarr;</a>
        </div>
    </div>
    <div class="grid-container container">
        @foreach($data as $item)
        @include('../buyer/components/card')
        @endforeach
    </div>
</div>

<script type="text/javascript">

    function Navbar(){
        const navbar = document.querySelector('button.navbar-toggler')
        const textBanner = document.getElementById('text-banner')
        const logo = document.getElementById('logo')

        if(navbar.attributes[5].value == 'true'){
            textBanner.style.display = "none"
            logo.style.display = "none"
        }else{
            textBanner.style.display = "block"
            logo.style.display = "block"
        }
    }
    

</script>
@endsection


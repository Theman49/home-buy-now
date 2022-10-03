@extends('../layout/main')
@section('head')
<link rel="stylesheet" href="/css/buyer/home.css">
<link rel="stylesheet" href="/css/buyer/navbar.css">
<title>{{ $title }} | Home Buy Now</title>
@endsection

@section('container')
<div class="container pt-4">
@include('buyer/components/navbar')
@foreach($data as $item)
    <a href="javascript:history.go(-1)" class="back btn btn-warning mt-4">Back</a>

    <p class="path mb-3"><a href="/beranda">beranda</a> / <a href="/{{ $item->jenis_rumah }}">{{ $item->jenis_rumah }}</a> / <a href="/search/{{ $item->nama_lokasi }}">{{ $item->nama_lokasi }}</a> / <span class="color-light-blue-1">{{ $item->nama_object }}</p>

    <div class="d-flex justify-content-between">  
        @if(count($images)) 
        <div id="carouselImage" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <?php
                    $no = 0;
                    foreach($images as $image){
                        ?>
                            <button type="button" data-bs-target="#carouselImage" data-bs-slide-to="<?=$no?>" class="active" <?=$no == 0 ? 'aria-current="true"' : ''?> aria-label="Slide <?=$no+1?>"></button>
                        <?php
                        $no++;
                    }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                    $no = 0;
                    foreach($images as $image){
                        $url = "$item->jenis_rumah/$item->id_house/$image->item";
                        ?>
                            <div class="carousel-item <?=$no == 0 ? "active" : ""?>">
                                <img src="{{ asset('/storage/public/'.$url) }}" class="d-block" alt="...">
                            </div>
                        <?php
                        $no++;
                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImage" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @else
            <div class="">
                <img src="{{ asset('/img/default.jpg') }}" class="d-block w-100" alt="...">
            </div>
        @endif

        

    </div>
    <div class="row mb-4">
            <div class="d-flex align-items-center my-3 mb-1">
                <img src="/img/lokasi.png" alt="">
                <p class="location ms-3 color-light-blue-1">{{ ucfirst($item->nama_lokasi) }}</p>
            </div>
            <h3>{{ $item->nama_object }}</h3>
    </div>

    <?php
        $harga = $item->harga;
        $formatedHarga = "";
        $index = 0;
        for($i=strlen($harga)-1;$i>=0;$i--){
            if($index % 3 == 0 && $i != strlen($harga) -1){
                $formatedHarga .= ".";
            }            
            $formatedHarga .= $harga[$i];
            $index+=1;
        }
        $formatedHarga = strrev($formatedHarga)
    ?>

    <div class="row description">
        <div class="col-sm-12 col-md-8">
            <p>Luas Bangunan : {{ $item->luas_bangunan }}m<sup>2</sup></p>
            <p>Luas Tanah : {{ $item->luas_tanah }}m<sup>2</sup></p>
            <p>Jumlah Kamar Tidur : {{ $item->jumlah_kamar_tidur }} Kamar Tidur</p>
            <p>Jumlah Kamar Mandi : {{ $item->jumlah_kamar_mandi }} Kamar Mandi</p>
            <p>Jumlah Carport : {{ $item->jumlah_carport }}</p>
            <p>Tahun Bangun : {{ $item->tahun_bangun }}</p>
            <p><b>Rp {{$formatedHarga}},-</b></p>

            <hr>
            <h3 class="mt-3">Description</h3>
            <div id="description-text">{!! $item->deskripsi !!}</div>
        </div>
        
        <div class="col-sm-12 col-md-4">
            <div class="card p-3">
                <div class="text-center">
                    <h4>Selengkapnya tentang properti ini</h4>
                    <p>Tanyakan Kebutuhanmu disini.</p>
                </div>
                <div class="p-3">
                    <div class="mb-3">
                        <input class="form-control" type="text" id="nama" placeholder="nama">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="pertanyaan" id="pertanyaan" cols="30" rows="5" placeholder="tuliskan pertanyaanmu disini..."></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn bg-light-green-1 text-white d-flex align-items-center m-auto" id="kirim" onclick="generateMessage()"><img class="me-3" src="/img/whatsapp-icon.png" alt="">Kirim Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
   
        function generateMessage(){
            const nama = document.getElementById('nama').value;
            const pertanyaan = document.getElementById('pertanyaan').value;

            const message = "Halo!! saya " + nama + ", tertarik dengan informasi " + " Rumah {{ $item->jumlah_lantai }} lantai {{ $item->jenis_rumah }} {{ $item->nama_object }} di {{ $item->nama_lokasi }}. " + pertanyaan + ". Mohon informasinya " + document.location.href;

            document.location.href = "https://wa.me/+6287894441306?text=" + message
        }


    </script>
@endforeach
    
</div>
    

@endsection

@section('script')
@endsection

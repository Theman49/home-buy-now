@extends('../layout/dashboardSeller')
@section('main')
@foreach($data as $item)
    <h1>{{ $item->nama_object }}</h1>
    <h5>{{ $item->nama_lokasi }}</h5>
    <h6>{{ $item->jenis_rumah }}</h6>
    @if(count($images) > 0)
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
                            <img src="{{ asset('/storage/public/'.$url) }}" class="d-block w-100" alt="...">
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
    <div class="w-50">
        <img src="{{ asset('/img/default.jpg') }}" class="d-block w-100" alt="...">
    </div>
    @endif

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

    <div>
        <p>Luas Bangunan : {{ $item->luas_bangunan }}m<sup>2</sup></p>
        <p>Luas Tanah : {{ $item->luas_tanah }}m<sup>2</sup></p>
        <p>Jumlah Kamar Tidur : {{ $item->jumlah_kamar_tidur }} Kamar Tidur</p>
        <p>Jumlah Kamar Mandi : {{ $item->jumlah_kamar_mandi }} Kamar Mandi</p>
        <p>Jumlah Carport : {{ $item->jumlah_carport }}</p>
        <p>Tahun Bangun : {{ $item->tahun_bangun }}</p>
        <p><b>Rp {{$formatedHarga}},-</b></p>
        <h3>Deskripsi</h3>
        <div>
            {!! $item->deskripsi !!}
        </div>
    </div>
@endforeach
@endsection
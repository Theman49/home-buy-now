<div class="card" onclickk="view('{{ $item->id_house }}')">
    <div class="cover">
        <?php
            use Illuminate\Support\Facades\Storage;

            $dir = "/public/$item->jenis_rumah/$item->id_house";
            $files = Storage::disk('public')->files($dir);

            $url = '';
            if(count($files) > 0){
                $url = $files[0];
                $url = substr($url, 7);
            }
        ?>
        <div>
            @if($url)
                <img loading="lazy" src="{{ asset('/storage/public/'.$url) }}" alt="">
            @else
                <img loading="lazy" src="{{ asset('/img/default.jpg') }}" alt="">
            @endif
            <div class="title text-white d-flex">
                <p class="tipe-rumah"><b>{{ $item->jenis_rumah }}</b></p>
                @if($item->jenis_rumah != 'primary')
                    <p class="nego"><b>Nego</b></p>
                @endif
            </div>
        </div>
        
        <a href="/detail/{{ $item->id_house }}" class="btn btn-primary">Lihat Detail</a>
    </div>

    <div class="text">
        <div class="row mb-4">
                <div class="d-flex align-items-center mb-2">
                    <img loading="lazy" src="/img/lokasi.png" alt="">
                    <p>{{ $item->nama_lokasi }}</p>
                </div>
                <h3 class="text-start">{{ $item->nama_object }}</h3>
        </div>
        <div class="row mb-3">
            <div class="col-4 d-flex align-items-center">
                <img loading="lazy" src="/img/luas_tanah.png" alt="">
                <p>{{ $item->luas_tanah }} m<sup>2</sup></p>
            </div>
            <div class="col-4 d-flex align-items-center">
                <img loading="lazy" src="/img/luas_bangunan.png" alt="">
                <p>{{ $item->luas_bangunan }} m<sup>2</sup></p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4 d-flex align-items-center">
                <img loading="lazy" src="/img/jumlah_lantai.png" alt="">
                <p>{{ $item->jumlah_lantai }} Lt</p>
            </div>
            <div class="col-4 d-flex align-items-center">
                <img loading="lazy" src="/img/kamar_tidur.png" alt="">
                <p>{{ $item->jumlah_kamar_tidur }} KT</p>
            </div>
            <div class="col-4 d-flex align-items-center">
                <img loading="lazy" src="/img/kamar_mandi.png" alt="">
                <p>{{ $item->jumlah_kamar_mandi }} KM</p>
            </div>
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
        <div>
            <h4 class="harga">IDR {{ $formatedHarga }}
                @if($item->jenis_rumah != 'primary')
                    <span> / Nego</span>
                @endif
            </h4>
        </div>

        <script>
            function view(id_house){
                document.location.href = "/detail/" + id_house
            }
        </script>

    </div>
</div>

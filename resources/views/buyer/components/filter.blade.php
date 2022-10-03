<div class="d-flex justify-content-start mt-5">
    <form action="/search" class="d-flex">
        <div>
            <select id="jenis" name="jenis" class="form-select form-select-lg">
                <option value="">Jenis Rumah</option>
                @foreach($kategori as $item)
                    @if($item->id_kategori < 3)
                        <option value="{{ $item->nama_kategori }}" <?=isset($_GET['jenis']) && $_GET['jenis'] == $item->nama_kategori ? "selected" : ""?>>{{ ucfirst($item->nama_kategori) }}</option>
                    @endif
                @endforeach
            </select>

        </div>
        <div>
            <select id="lokasi" name="lokasi" class="form-select form-select-lg">
                <option value="">lokasi</option>
                @foreach($lokasi as $lok)
                    <option value="{{ $lok->id_lokasi }}" <?=isset($_GET['lokasi']) && $_GET['lokasi'] == $lok->id_lokasi ? "selected" : ""?>>{{ ucfirst($lok->nama_lokasi) }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <select id="harga" name="harga" class="form-select form-select-lg" aria-label=".form-select-sm example">
                <option value="">harga</option>
                <?php 
                    $harga = [
                        '<= 100 Juta',
                        '100 juta - 500 juta',
                        '500 juta - 1 Miliar',
                        '1 Miliar - 3 Miliar',
                        '3 Miliar - 5 Miliar',
                        '> 5 Miliar'
                    ];
                    $i = 0;
                ?>
                @foreach($prices as $price)
                    <option value="{{ $price->id_harga }}" <?=isset($_GET['harga']) && $_GET['harga'] == $price->id_harga ? "selected" : ""?>>{{ $harga[$i] }}</option>
                    <?php $i++?>
                @endforeach
            </select>
        </div>
        <div>
            <button class="btn btn-secondary px-4 h-100 fs-5">filter</button>
        </div>
    </form>
</div>
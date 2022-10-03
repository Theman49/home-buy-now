@extends('../layout/dashboardSeller')

@section('main')
<?php
  use Illuminate\Support\Facades\Storage;
?>
@foreach($data as $item)
<form action="/dashboard/edit" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="namaObject" class="form-label">Nama Rumah</label>
    <input type="text" class="form-control @error('nama_object') is-invalid @enderror" id="namaObject" aria-describedby="emailHelp" name="nama_object" value="{{ old('nama_object', $item->nama_object) }}" autofocus>
    @error('nama_object')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="mb-3">
    <div>
      <?php
          $files = Storage::disk('public')->files("/public/$item->jenis_rumah/$item->id_house");
          $file0 = "";
          $primaryImageName = "";
          if(count($files) > 0){
            $primaryImageName = substr($files[0], -5);
            $file0 = substr($files[0], 7);
          }
      ?>
      <h3>Primary Image</h3>
      @if($file0)
        <img id="primaryImage" src="{{ asset('/storage/public/'.$file0)}}" alt="">
      @else
        <img id="primaryImage" src="{{ asset('/img/default.jpg')}}" alt="">
      @endif

      @if($primaryImageName)
      <input type="text" class="d-none" id="setPrimaryImage" value="{{$primaryImageName}}" name="setPrimaryImage">
      @endif
    </div>

    <label for="gambarExist" class="form-label">Gambar yang Sudah Ada</label>
    <div class="row">
      @foreach($gambar as $image)
        <?php
          $url = "$item->jenis_rumah/$item->id_house/$image->item";
        ?>
        <div class="col-sm-3 col-md-3 mb-3 exist-image" id="gambar{{ $image->no }}">
          <label onclick="deleteGambar('{{ $image->no }}')" style="cursor: pointer">x</label>
          <img src="{{ asset('/storage/public/'.$url) }}" alt="" style="height: 100px; width: 150px">
          <p class="btn btn-primary mt-2" onClick="setPrimary('{{ asset('/storage/public/'.$url) }}', '{{$image->item}}')">Set Primary</p>
        </div>
      @endforeach
    </div>
  </div>
  <input class="d-none" type="text" id="idHome" name="id_house" value="{{ $item->id_house }}">
  <input class="d-none" type="text" id="deletedGambar" name="deletedGambar">
  <input class="d-none" type="text" id="tipeRumah" name="tipe_rumah" value="{{ $item->jenis_rumah }}">
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" multiple class="form-control @error('gambar') is-invalid @enderror" id="gambar" aria-describedby="emailHelp" name="item[]" value="{{ old('item') }}" autofocus>
    @error('item')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="row">
    <div class="col col-sm-12 col-md-6">
      <div class="mb-3">
        <label for="" class="form-label">Jenis Rumah : </label><br>
        <input type="radio" value="primary" id="kategori1" name="jenis_rumah" {{ $item->jenis_rumah == "primary" ? "checked" : "" }}><label class="mx-1" for="kategori1">Primary</label>
        <input type="radio" value="secondary" id="kategori2" name="jenis_rumah" {{ $item->jenis_rumah == "secondary" ? "checked" : "" }}><label class="mx-1" for="kategori2">Secondary</label>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Lokasi Rumah : </label><br>
        <select class="form-select w-75" aria-label="Default select example" name="id_lokasi" id="lokasi">
          @foreach($lokasi as $lok)
            <option value="{{ $lok->id_lokasi }}" {{ $item->id_lokasi == $lok->id_lokasi ? "selected" : ""}}>{{ ucfirst($lok->nama_lokasi) }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="jumlahLantai" class="form-label">Jumlah Lantai</label>
        <input type="number" min=1 class="form-control  w-75 @error('jumlah_lantai') is-invalid @enderror" id="jumlahLantai" aria-describedby="emailHelp" name="jumlah_lantai" value="{{ old('jumlah_lantai', $item->jumlah_lantai) }}" autofocus>
        @error('jumlah_lantai')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" min=1 class="form-control  w-75 @error('harga') is-invalid @enderror" id="harga" aria-describedby="emailHelp" name="harga" value="{{ old('harga', $item->harga) }}" autofocus>
        @error('harga')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="luasTanah" class="form-label">Luas Tanah</label>
        <input type="number" min=1 class="form-control  w-75 @error('luas_tanah') is-invalid @enderror" id="luasTanah" aria-describedby="emailHelp" name="luas_tanah" value="{{ old('luas_tanah', $item->luas_tanah) }}" autofocus>
        @error('luas_tanah')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

    </div>

    <div class="col col-sm-12 col-md-6">
      <div class="mb-3">
        <label for="luasBangunan" class="form-label">Luas Bangunan</label>
        <input type="number" min=1 class="form-control  w-75 @error('luas_bangunan') is-invalid @enderror" id="luasBangunan" aria-describedby="emailHelp" name="luas_bangunan" value="{{ old('luas_bangunan', $item->luas_bangunan) }}" autofocus>
        @error('luas_bangunan')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahKamarTidur" class="form-label">Jumlah Kamar Tidur</label>
        <input type="number" min=1 class="form-control  w-75 @error('jumlah_kamar_tidur') is-invalid @enderror" id="jumlahKamarTidur" aria-describedby="emailHelp" name="jumlah_kamar_tidur" value="{{ old('jumlah_kamar_tidur', $item->jumlah_kamar_tidur) }}" autofocus>
        @error('jumlah_kamar_tidur')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahKamarMandi" class="form-label">Jumlah Kamar Mandi</label>
        <input type="number" min=1 class="form-control  w-75 @error('jumlah_kamar_tidur') is-invalid @enderror" id="jumlahKamarMandi" aria-describedby="emailHelp" name="jumlah_kamar_mandi" value="{{ old('jumlah_kamar_mandi', $item->jumlah_kamar_mandi) }}" autofocus>
        @error('jumlah_kamar_mandi')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahCarport" class="form-label">Jumlah Carport</label>
        <input type="number" min=0 class="form-control  w-75 @error('jumlah_carport') is-invalid @enderror" id="jumlahCarport" aria-describedby="emailHelp" name="jumlah_carport" value="{{ old('jumlah_carport', $item->jumlah_carport) }}" autofocus>
        @error('jumlah_carport')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tahunBangun" class="form-label">Tahun Bangun</label>
        <input type="number" min=1 class="form-control  w-75 @error('tahun_bangu') is-invalid @enderror" id="tahunBangun" aria-describedby="emailHelp" name="tahun_bangun" value="{{ old('tahun_bangun', $item->tahun_bangun) }}" autofocus>
        @error('tahun_bangun')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
    </div>

  </div>

  <div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    @error('deskripsi')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input id="deskripsi" type="hidden" name="deskripsi" value="{!! old('deskripsi', $item->deskripsi) !!}">
    <trix-editor input="deskripsi"></trix-editor>
  </div>

  <button type="submit" class="btn btn-primary">Edit Post</button>
</form>

<script>
  function deleteGambar(id){
    const getId = "gambar" + id
    let deletedGambarInput = document.getElementById('deletedGambar')
    var gambar = document.getElementById(getId)
    gambar.style.display = "none"
    deletedGambarInput.value += id + ",";
  }

  function setPrimary(url, path){
    const primaryImage = document.getElementById('primaryImage')
    const inputSetPrimary = document.getElementById('setPrimaryImage')


    inputSetPrimary.value = path


    primaryImage.src = url;

    // let sameImage = document.querySelectorAll(`img[src="${url}"]`)[1]
    // sameImage.nextElementSibling.style.display = "none"

    const existImage = document.querySelectorAll('.exist-image img')
    for(let i=0; i<existImage.length; i++){
      if(existImage[i].src == url){
        existImage[i].nextElementSibling.style.display = "none"
      }else{
        existImage[i].nextElementSibling.style.display = "block"
      }
    }

  }
</script>

@endforeach
@endsection
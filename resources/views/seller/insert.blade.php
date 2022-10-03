@extends('../layout/dashboardSeller')

@section('main')
<form action="/dashboard/create" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="namaObject" class="form-label">Nama Rumah</label>
    <input type="text" class="form-control @error('nama_object') is-invalid @enderror" id="namaObject" aria-describedby="emailHelp" name="nama_object" value="{{ old('nama_object') }}" autofocus>
    @error('nama_object')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
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
        <input type="radio" value="primary" id="kategori1" name="jenis_rumah" checked><label class="mx-1" for="kategori1">Primary</label>
        <input type="radio" value="secondary" id="kategori2" name="jenis_rumah"><label class="mx-1" for="kategori2">Secondary</label>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Lokasi Rumah : </label><br>
        <select class="form-select w-75" aria-label="Default select example" name="id_lokasi" id="lokasi">
          @foreach($lokasi as $item)
            <option value="{{ $item->id_lokasi }}">{{ ucfirst($item->nama_lokasi) }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="jumlahLantai" class="form-label">Jumlah Lantai</label>
        <input type="number" min=1 class="form-control  w-75 @error('jumlah_lantai') is-invalid @enderror" id="jumlahLantai" aria-describedby="emailHelp" name="jumlah_lantai" value="{{ old('jumlah_lantai') }}" autofocus>
        @error('jumlah_lantai')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" min=1 class="form-control  w-75 @error('harga') is-invalid @enderror" id="harga" aria-describedby="emailHelp" name="harga" value="{{ old('harga') }}" autofocus>
        @error('harga')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="luasTanah" class="form-label">Luas Tanah</label>
        <input type="number" min=1 class="form-control  w-75 @error('luas_tanah') is-invalid @enderror" id="luasTanah" aria-describedby="emailHelp" name="luas_tanah" value="{{ old('luas_tanah') }}" autofocus>
        @error('luas_tanah')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>

    </div>

    <div class="col col-sm-12 col-md-6">
      <div class="mb-3">
        <label for="luasBangunan" class="form-label">Luas Bangunan</label>
        <input type="number" min=1 class="form-control  w-75 @error('luas_bangunan') is-invalid @enderror" id="luasBangunan" aria-describedby="emailHelp" name="luas_bangunan" value="{{ old('luas_bangunan') }}" autofocus>
        @error('luas_bangunan')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahKamarTidur" class="form-label">Jumlah Kamar Tidur</label>
        <input type="number" min=1 class="form-control  w-75 @error('jumlah_kamar_tidur') is-invalid @enderror" id="jumlahKamarTidur" aria-describedby="emailHelp" name="jumlah_kamar_tidur" value="{{ old('jumlah_kamar_tidur') }}" autofocus>
        @error('jumlah_kamar_tidur')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahKamarMandi" class="form-label">Jumlah Kamar Mandi</label>
        <input type="number" min=1 class="form-control  w-75 @error('jumlah_kamar_tidur') is-invalid @enderror" id="jumlahKamarMandi" aria-describedby="emailHelp" name="jumlah_kamar_mandi" value="{{ old('jumlah_kamar_mandi') }}" autofocus>
        @error('jumlah_kamar_mandi')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="jumlahCarport" class="form-label">Jumlah Carport</label>
        <input type="number" min=0 class="form-control  w-75 @error('jumlah_carport') is-invalid @enderror" id="jumlahCarport" aria-describedby="emailHelp" name="jumlah_carport" value="{{ old('jumlah_carport') }}" autofocus>
        @error('jumlah_carport')
          <p class="text-danger">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="tahunBangun" class="form-label">Tahun Bangun</label>
        <input type="number" min=1 class="form-control  w-75 @error('tahun_bangu') is-invalid @enderror" id="tahunBangun" aria-describedby="emailHelp" name="tahun_bangun" value="{{ old('tahun_bangun') }}" autofocus>
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

  <button type="submit" class="btn btn-primary">Tambah Post</button>
</form>
@endsection
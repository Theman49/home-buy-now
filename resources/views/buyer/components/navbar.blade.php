<nav id="navbar" class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
    <img onclick="goToBeranda()" id="brand" src="/img/brand-2.png" alt="" style="cursor: pointer">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto my-0">
        @foreach($kategori as $row)
        <li class="nav-item mx-2 <?=($row->id_kategori > 2) ? 'd-none' : ''?>">
          <a class="nav-link <?=$section ==  $row->nama_kategori ? 'active' : ''?>" aria-current="page" href="/{{ $row->nama_kategori }}">{{ ucfirst($row->nama_kategori) }}</a>
        </li>
        @endforeach
      </ul>
      <a href="https://wa.me/+6287894441306?text=Halo!!!" class="btn bg-light-green-1 d-flex align-items-center">
          <img src="/img/whatsapp-icon.png" alt="" class="me-3" width="20px" height="20px">
          <p class="text-white">Hubungi Kami</p>
      </a>
      
    </div>
  </div>
</nav>

<script>
  function goToBeranda(){
    document.location.href = "/beranda";
  }
</script>
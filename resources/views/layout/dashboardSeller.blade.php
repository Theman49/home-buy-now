<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>{{ $title }} | Home Buy Now</title>

    @if ($title === "Tambah Rumah" || $title === "Edit")
    <link rel="stylesheet" type="text/css" href="/trix/trix.css">
    <script type="text/javascript" src="/trix/trix.js"></script>
    @endif

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- trix-editor -->
    <link rel="stylesheet" type="text/css" href="/trix/trix.css">
    <script type="text/javascript" src="/trix/trix.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      #sidebarMenu.show {
        padding: 0;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>

    <link rel="icon" href="/img/brand.png">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/seller/style.css">
  </head>
  @if($title == 'Posts')
  <body id="posts">
  @elseif($title == 'Preview')
  <body id="preview">
  @elseif($title == 'Edit')
  <body id="edit">
  @elseif($title == "Tambah Post")
  <body id="insert">
  @else
  <body>
  @endif
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-dark" href="/seller">Home Buy Now</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="bg-dark form-control form-control-dark w-100" type="text" aria-label="Search" disabled readonly style="margin-top: -100%">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/logout">Logout<i class="bi bi-box-arrow-right ms-2"></i></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link @if ( $title === 'Dashboard' ) active @endif" aria-current="page" href="/seller">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if ( $title === 'Posts' ) active @endif" href="/seller/posts">
              <span data-feather="file"></span>
              Posts
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>{{ $title }}</h2>
    </div>
    @yield('main')
    @if($title == "Preview" || $title == "Edit" || $title == "Tambah Post")
      <a href="/seller/posts" class="btn btn-success mb-3 mt-5"><i class="bi bi-chevron-left me-2"></i>Kembali</a>
    @endif
    </main>
  </div>
</div>

      @include('../components/footer')
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7sk0gln4gmtz2mlqnikt1wxgysog+omhup+ilrh9senbo0lrn5q+8nbtov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
   
  </body>
</html>

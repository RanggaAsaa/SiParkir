<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiParkir - Beranda</title>
    <link rel="stylesheet" href="{{ url('tampilan-user/dist/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="logo" href="#">Si Parkir</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end mt-2" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
              </li>
              <li class="nav-item">
            <a class="nav-link" href="#cektempatparkir">Cek Tempat Parkir</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="login.html">Log In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <section class="pengenalan" id="beranda">
      <div class="container text-start">
        <div class="row">
          <div class="col-md-6">
            <h2 class="header-text-aplikasi">Aplikasi Parkir dengan fitur yang sangat menarik.</h2>
            <p class="paragraph-aplikasi">Anda dapat dengan mudah mencari tempat parkir yang tersedia di kota Anda dan membayar dengan mudah dan cepat.</p>
            <button class="btn-header"><a href="">Coba Sekarang</a></button>
            </div>
          <div class="col-md-6 mb-5 d-block d-md-block d-sm-block">
           <img src="{{ url('tampilan-user/dist/asset/Parking.gif') }}" class="img-fluid image-header" alt="">
          </div>
        </div>
      </div>
    </section>
      
    <section class="tentang" id="tentang">
      <div class="container text-center">
        <h2 class="header-text-tentang">Tentang Aplikasi</h2>
        <div class="row">
          <div class="col-md-5">
            <p class="paragraph-tentang">Aplikasi ini dibuat untuk mempermudah para pengguna dalam mencari tempat parkir yang tersedia di kota mereka. Dengan menggunakan fitur Cek Tempat Parkir, Anda dapat dengan mudah mencari tempat parkir yang tersedia di kota Anda dan membayar dengan mudah dan cepat. Selain itu, juga dapat melihat Lokasi Parkir yang tersedia dan juga dapat melihat Histori Parkir yang sudah pernah dilakukan.</p>
            <button class="btn-header-tentang d-block d-sm-block d-none d-md-none">Coba Sekarang</button>    
          </div>
        <div class="col-md-7 d-block d-md-block d-none d-sm-none">
          <img src="{{ url('tampilan-user/dist/asset/Parking2.gif') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    </section>

    <section class="cek-tempat-parkir" id="cektempatparkir">
      <div class="container text-center">
        <h2 class="header-text-cek-tempat-parkir">Cek Tempat Parkir</h2>
        <div class="card mt-4">
          <div class="card-header">
            Tempat Parkir
          </div>
          <div class="card-body">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Blok</th>
                  <th>Jumlah Tempat</th>
                  <th>Tempat Terpakai</th>
                  <th>Sisa Tempat</th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    
    <section class="footer" id="footer">
      <footer class="footer mt-5">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-4">
              <h5 class="header-text-footer fs-1">Si Parkir</h5>
            </div>
            <div class="col-md-4">
              <h5 class="header-text-footer">Menu</h5>
              <ul class="list-unstyled">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#cektempatparkir">Cek Tempat Parkir</a></li>
                <li><a href="login.html">Log In</a></li>
                <li><a href="#tentang">Tentang</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h5 class="header-text-footer">Developed By</h5>
              <ul class="list-unstyled">
                <li><a href="">Tim PKL Havedev GEL 2</a></li>
              </ul>
            </div>
          </div>
        </div>
         <div class="social-media text-center">
          <i class="bi bi-instagram"></i>
          <i class="bi bi-facebook"></i>
          <i class="bi bi-github"></i>
         </div>
      </footer>
    </section>

    <script src="{{ url('tampilan-user/dist/js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
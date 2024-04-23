<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiParkir - Beranda</title>
    <link rel="stylesheet" href="{{ url('tampilan-user/dist/css/after-login.css') }}">
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
            <a class="nav-link" href="#cektempatparkir">Cek Tempat Parkir</a>
              </li>
              <div class="dropdown">
                <button class="btn dropdown-toggle border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nama Akun
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Informasi Akun</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div>
            </ul>
          </div>
        </div>
      </nav>

    <section class="pengenalan" id="beranda">
      <div class="container text-start">
        <div class="row">
          <div class="col-md-6">
            <h2 class="header-text-aplikasi">Halo, Nama Akun</h2>
            <p class="paragraph-text-aplikasi">Selamat datang di Aplikasi Parkir, Semoga hari Anda menyenangkan dan dapat mencapai tujuan Anda.</p>
            <button class="btn-header d-block d-md-block d-none d-sm-none"><a href="#cektempatparkir">Cek Tempat Parkir</a></button>
          </div>
          <div class="col-md-6 mb-5">
            <img src="{{ url('tampilan-user/dist/asset/Hello.gif') }}" class="img-fluid image-header" alt="">
            <button class="btn-header d-block d-sm-block d-md-none"><a href="#cektempatparkir">Cek Tempat Parkir</a></button>
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
                @foreach ($data as $isi)
                <tr>
                    <td>{{$loop->iteration }}</td>
                    <td>{{$isi->blok}}</td>
                    <td>{{$isi->jumlah_tempat}}</td>
                    <td>{{$isi->tempat_terpakai }}</td>
                    <td>{{$isi->sisa_tempat }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Booking Sekarang
            </button>
          </div>
        </div>
      </div>
    </section>
    
    <section class="footer" id="footer">
      <footer class="footer mt-5">
        <div class="container text-center">
          <div class="row">
            <div class="col-sm-4 mt-4">
              <h3 class="header-text-footer fs-1">Si Parkir</h3>
              
            </div>
            <div class="col-sm-4">
              <h5 class="header-text-footer">Menu</h5>
              <ul class="list-unstyled">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#cektempatparkir">Cek Tempat Parkir</a></li>
                <li><a href="login.html">Log In</a></li>
              </ul>
            </div>
            <div class="col-sm-4">
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

    <!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Booking</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <label for="blok" class="form-label">Pilih Blok</label>
          <select class="form-select mb-3" aria-label="Default select example">
            <option>Pilih Blok</option>
            <option value="blok-a">Blok-A</option>
            <option value="blok-b">Blok-B</option>
            <option value="blok-c">Blok-C</option>
          </select>
          <div class="mb-2">
            <label for="no_polisi" class="form-label">No Polisi</label>
            <input type="text" class="form-control" id="no_polisi" aria-describedby="emailHelp">
          </div>
          <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
          <select class="form-select" aria-label="Default select example">
            <option>Pilih Jenis Kendaraan</option>
            <option value="mobil">Mobil</option>
            <option value="montor">Montor</option>
            <option value="sepeda">Sepeda</option>
          </select>
        </form> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Booking</button>
      </div>
    </div>
  </div>
</div>
    <script src="{{ url('tampilan-user/dist/js/script.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
  </body>
</html>
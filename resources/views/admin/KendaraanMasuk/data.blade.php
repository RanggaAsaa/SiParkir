@extends('admin.template')
@section('title', 'Kendaraan Masuk')
@section('content')
<div class="card">
    <div class="card-header">
        <button class="btn btn-sm btn-success float-end btn-rounded" data-bs-toggle="modal"  data-bs-target="#modalTambah">Tambah</button>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Blok</th>
                            <th>No Polisi</th>
                            <th>Jenis Kendaraan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $isi)
                        <tr>
                            <td>{{$loop->iteration }}</td>
                            <td>{{$isi->blok}}</td>
                            <td>{{$isi->nopol }}</td>
                            <td>{{$isi->jenis_kendaraan }}</td>
                            <td>
                                <button type="button" href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $isi->id }}">Edit</button>
                                <a href="/admin/Kendaraan-Masuk/hapus/{{ $isi->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!--modal tambah--->
    <div class="modal fade modal-lg" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="/admin/Kendaraan-Masuk/tambah" method="POST" class="mx-5">
                @csrf
                    <label for="blok" class="form-label">Pilih Blok</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="blok">
                            <option></option>
                            <option value="blok-a">Blok-A</option>
                            <option value="blok-b">Blok-B</option>
                            <option value="blok-c">Blok-C</option>
                        </select>

                    <div class="mb-3">
                      <label for="nopol" class="form-label">Nomor Polisi</label>
                      <input type="text" class="form-control" name="nopol" id="nopol">
                    </div>

                    <label for="jenis_kendaraan" class="form-label">Pilih Jenis Kendaraan</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="jenis_kendaraan" id="jenis_kendaraan">
                            <option></option>
                            <option value="mobil">Mobil</option>
                            <option value="motor">Montor</option> 
                        </select>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" onclick="confirmBooking()">Simpan</button>
            </form>
            </div>
          </div>
        </div>
      </div>

    <!--modal edit--->
    @foreach ($data as $isi)
    <div class="modal fade modal-lg" id="modalEdit{{ $isi->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/Kendaraan-Masuk/ubah/{{ $isi->id }}" method="POST" class="mx-5">
                @csrf
                    <label for="blok" class="form-label">Pilih Blok</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="blok" id="blok">
                            <option></option>
                            <option value="blok-a" @if ($isi->blok == 'blok-a') selected @endif>Blok-A</option>
                            <option value="blok-b" @if ($isi->blok == 'blok-b') selected @endif>Blok-B</option>
                            <option value="blok-c" @if ($isi->blok == 'blok-c') selected @endif>Blok-C</option>
                        </select>

                    <div class="mb-3">
                      <label for="no_pol" class="form-label">Nomor Polisi</label>
                      <input type="text" class="form-control" name="nopol" id="nopol" value="{{ $isi->nopol }}">
                    </div>

                    <label for="blok" class="form-label">Pilih Jenis Kendaraan</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="jenis_kendaraan" id="jenis_kendaraan">
                            <option></option>
                            <option value="mobil" @if ($isi->jenis_kendaraan == 'mobil') selected @endif>Mobil</option>
                            <option value="motor" @if ($isi->jenis_kendaraan == 'motor') selected @endif>Montor</option>  
                        </select>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
            </div>
          </div>
        </div>
      </div>
      @endforeach
</div>




@stop

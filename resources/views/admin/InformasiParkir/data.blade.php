@extends('admin.template')
@section('title', $judul)
@section('menu', $menu)
@section('content')
    <div class="card">
        <div class="card-header">
            <button class="btn btn-sm btn-success float-end btn-rounded" data-bs-toggle="modal"  data-bs-target="#modalTambah">Tambah</button>
            <h5 class="card-title">
                Data {{$judul}}
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Blok</th>
                            <th>Jumlah Tempat</th>
                            <th>Tempat Terpakai</th>
                            <th>Sisa Tempat</th>
                            <th>Aksi</th>
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
                            <td>
                                <button type="button" href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $isi->id }}">Edit</button>
                                <a href="/admin/InformasiParkir/hapus{{ $isi->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
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
              <form action="/admin/InformasiParkir/tambah" method="POST" class="mx-5">
                @csrf
                <label for="blok" class="form-label">Pilih Blok</label>
                <select class="form-select mb-3" aria-label="Default select example" name="blok">
                    <option></option>
                    <option value="blok-a">Blok-A</option>
                    <option value="blok-b">Blok-B</option>
                    <option value="blok-c">Blok-C</option>
                </select>

                    <div class="mb-3">
                      <label for="jumlah_tempat" class="form-label">Jumlah Tempat</label>
                      <input type="number" class="form-control" name="jumlah_tempat" id="jumlah_tempat">
                    </div>

                    <div class="mb-3">
                      <label for="tempat_terpakai" class="form-label">Tempat Terpakai</label>
                      <input type="number" class="form-control" name="tempat_terpakai" id="tempat_terpakai">
                    </div>

                    <div class="mb-3">
                      <label for="sisa_tempat" class="form-label">Sisa Tempat</label>
                      <input type="number" class="form-control" name="sisa_tempat" id="sisa_tempat">
                    </div>

                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
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
                <form action="/admin/InformasiParkir/ubah/{{ $isi->id }}" method="POST" class="mx-5">
                        @csrf
                        <label for="blok" class="form-label">Pilih Blok</label>
                        <select class="form-select mb-3" aria-label="Default select example" name="blok" id="blok">
                            <option></option>
                            <option value="blok-a" @if ($isi->blok == 'blok-a') selected @endif>Blok-A</option>
                            <option value="blok-b" @if ($isi->blok == 'blok-b') selected @endif>Blok-B</option>
                            <option value="blok-c" @if ($isi->blok == 'blok-c') selected @endif>Blok-C</option>
                        </select>

                        <div class="mb-3">
                            <label for="jumlah_tempat" class="form-label">Jumlah Tempat</label>
                            <input type="number" class="form-control" name="jumlah_tempat" id="jumlah_tempat" value="{{$isi->jumlah_tempat}}">
                        </div>

                        <div class="mb-3">
                            <label for="tempat_terpakai" class="form-label">Tempat Terpakai</label>
                            <input type="number" class="form-control" name="tempat_terpakai" id="tempat_terpakai" value="{{$isi->tempat_terpakai}}">
                        </div>

                        <div class="mb-3">
                            <label for="sisa_tempat" class="form-label">Sisa Tempat</label>
                            <input type="number" class="form-control" name="sisa_tempat" id="sisa_tempat" value="{{$isi->sisa_tempat}}">
                        </div>
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

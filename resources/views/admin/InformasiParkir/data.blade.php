@extends('admin.template')
@section('title', $judul)
@section('menu', $menu)
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <button class="btn btn-sm btn-success float-end btn-rounded" data-bs-toggle="modal"
                data-bs-target="#m-tambah" data-judul="Tambah {{$judul}}" data-menu="{{$route}}"> <i
                    class="mdi mdi-library-plus"></i> Tambah</button>

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
                            <td>{{$isi->jumlah_tempat}}</td>
                            <td>{{$isi->tempat_terpakai }}</td>
                            <td>{{$isi->sisa_tempat }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning btn-rounded" data-bs-toggle="modal"
                                    data-bs-target="#m-detail" data-judul="Ubah {{$judul}}" data-menu="{{$route}}"
                                    data-id="{{$isi->id}}"><i class="mdi mdi-table-edit"></i> Ubah</button>
                                @if (!$isi->menu)
                                <button class="btn btn-sm btn-danger btn-rounded" id="btn-hapus" data-toggle="modal"
                                    data-target="#m-hapus" data-menu="{{$route}}" data-id="{{$isi->id}}"
                                    data-isi="{{$isi->jenis_artikel}}" data-title="Hapus {{$judul}}"
                                    title="Hapus {{$judul}}"><i class="mdi mdi-bookmark-remove"></i> Hapus</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>
@stop

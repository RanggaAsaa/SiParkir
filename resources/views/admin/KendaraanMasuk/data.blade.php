@extends('admin.template')
@section('title', 'Kendaraan Masuk')
@section('content')
<div class="card">
    <div class="card-header">
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
@stop

@extends('layouts.navbar')
@section('content')

@section('title')
    <title> Kelola Data Jurusan </title>
@endsection
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Siswa" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-gradient-primary" type="button">Search</button>
                    </div>
                </div>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Kelola Data</li>
                    <li class="breadcrumb-item active" aria-current="page">Data Jurusan</li>
                </ol>
            </nav>
        </div>

        <a href="{{url('jurusan/create') }}">
            <button type="button" class="btn btn-primary mt-3">
            <i class="glyphicon glyphicon-plus"></i> Tambah Data Jurusan </button>
        </a>

        <div class="col-lg-120 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Jurusan</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Jurusan </th>
                                <th> Aksi  </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($jurusan as $row)
                            <tr>
                                <td> {{ isset($i) ? ++$i : $i = 1 }} </td>
                                <td> {{ $row->nama_jurusan }} </td>
                                <td> <form action="{{ url('/kelas', $row->id) }}" method="POST">
                                        <a href="{{ url('/kelas/' . $row->id . '/edit') }}">
                                            <button type="button" class="btn btn-warning btn-sm">
                                            <i class="glyphicon glyphicon-plus"></i> Edit </button>
                                        </a> 

                                        @method('DELETE')
                                        @csrf 
                                        <a href="{{ url('/kelas/' . $row->id . '/hapus') }}">
                                            <button type="button" class="btn btn-danger btn-sm">
                                            <i class="glyphicon glyphicon-plus"></i> Hapus </button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection
    </div>
   


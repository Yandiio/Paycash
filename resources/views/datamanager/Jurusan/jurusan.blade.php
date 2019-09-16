@extends('layouts.navbar')
@section('content')

@section('title')
<title> Kelola Data Jurusan </title>
@endsection

<head>
    <link rel=”stylesheet” href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

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
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $row)
                            <tr>
                                <td> {{ isset($i) ? ++$i : $i = 1 }} </td>
                                <td> {{ $row->nama_jurusan }} </td>
                                <td>
                                    <form action="{{ url('/jurusan', $row->id) }}" method="POST">
                                        <a href="{{ url('/jurusan/' . $row->id . '/edit') }}">
                                            <button type="button" class="btn btn-warning btn-sm">
                                                <i class="glyphicon glyphicon-plus"></i> Edit </button>
                                        </a>
                                        
                                        <a href="{{ url('/jurusan/'.$row->id)}}">
                                            <button type="button" class="btn btn-primary btn-sm">Detail</button>
                                        </a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                        
                                    </form>
                                    <!-- <form action="{{ url('/jurusan/'. $row->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="glyphicon glyphicon-plus"></i> Hapus </button>
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$jurusan->links()}}
                </div>
            </div>
            <Script:src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"> </Script>
            @include('sweet::alert')
        </div>
 @endsection
 </div>

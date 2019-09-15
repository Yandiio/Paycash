@extends('layouts.navbar')
@section('content')

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
                    <li class="breadcrumb-item">Manage Data</li>
                    <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                </ol>
            </nav>
        </div>

        <a href="{{url('siswa/create')}}">
            <button type="button" class="btn btn-primary mt-3">Tambah Data</button>
        </a>

        <div class="col-lg-120 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Siswa</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th> No</th>
                            <th>Foto</th>
                                <th>
                                    Nama Lengkap
                                </th>
                                <th>
                                    Jurusan
                                </th>
                                <th>
                                    Kelas
                                </th>
                                <th>
                                    Tahun ajaran                                    
                                </th>
                                <th>
                                    Telepon
                                </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <th>$</th>
                            <th>#</th>
                            <th>-</th>
                            <th>)</th>
                            <th>+</th>
                            <th>@</th>
                            <th>*</th>
                            <td>
                                <th>*</th>
                                <th>(</th>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection
    </div>

</div>

</div>

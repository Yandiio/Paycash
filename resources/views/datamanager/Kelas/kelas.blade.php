@extends('layouts.navbar')
@section('content')

@section('title')
<title>Kelola Data Kelas</title>

@endsection

@section('content')
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
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Kelola Data</li>
                    <li class="breadcrumb-item active" aria-current="page">Data Kelas</li>
                </ol>
            </nav>
        </div>

        <a href="{{url('kelas/create') }}">
            <button type="button" class="btn btn-primary mt-3">
                <i class="glyphicon glyphicon-plus"></i> Tambah Data Kelas </button>
        </a>

        <div class="col-lg-120 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kelas</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Nama Kelas </th>
                                <th> Tingkatan Kelas </th>
                                <th> Wali Kelas </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $row)
                            <tr>
                                <td> {{ isset($i) ? ++$i : $i = 1 }} </td>
                                <td> {{ $row->nama_kelas }} </td>
                                <td> {{ $row->tingkat_kelas}} </td>
                                <td> {{ $row->wali_kelas }} </td>
                                <td>
                                    <form action="{{ url('/kelas', $row->id) }}" method="POST">
                                        <a href="{{ url('/kelas/' . $row->id . '/edit') }}">
                                            <button type="button" class="btn btn-warning btn-sm">
                                                <i class="glyphicon glyphicon-plus"></i> Edit </button>
                                        </a>


                                        <a href="{{ url('/kelas/'.$row->id) }}">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                <i class="glyphicon glyphicon-plus"></i> Detail </button>
                                        </a>
                                    </form>
                                    <form action="{{url('/kelas/'.$row->id)}}" method="POST">
                                        @method('DELETE')    
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
    @endsection
</div>

</div>

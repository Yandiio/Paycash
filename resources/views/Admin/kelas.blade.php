@extends('layouts.navbar')
@section('content')
<div class="main-panel">
        <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_kelas" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kelas') }}</label>

                            <div class="col-md-6">
                                <input id="nama_kelas" type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas" value="{{ old('nama_kelas') }}" required autocomplete="nama_kelas" autofocus>

                                @error('nama_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        </div>

                        <div class="form-group row">
                            <label for="tingkat_kelas" class="col-md-4 col-form-label text-md-right">{{ __('Tingkatan Kelas') }}</label>
                        
                            <div class="col-md-6">
                                <select name="tingkat_kelas" class="form-control @error('tingkat_kelas') is-invalid @enderror" name="tingkat_kelas" value="{{ old('tingkat_kelas') }}" required autocomplete="tingkat_kelas">
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>

                                @error('tingkat_kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
@endsection
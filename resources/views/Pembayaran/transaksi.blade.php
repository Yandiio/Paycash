@extends('layouts.navbar')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"></h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active" aria-current="page">Pembayaran SPP | DSP
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-120 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><b>Pembayaran SPP | DSP</b></h2><br><br>

                    <p class="card-description">
                        <b>Identitas Siswa</b>
                    </p>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Siswa</label>
                        <input type="text" name="nama" value="{{ old('nama', @$siswa->nama) }}"class="form-control form-control-lg" id="exampleFormControlSelect1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <input type="text" name="kelas" value="{{ old('nama_kelas', @$kelas->nama_kelas) }}" class="form-control form-control-lg" id="exampleFormControlSelect1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tahun Ajaran</label>
                        <input type="text" name="thn_ajaran" value="{{ old('thn_ajaran', @$siswa->thn_ajaran) }}" class="form-control form-control-lg" id="exampleFormControlSelect1">
                    </div> <br> 

                    <p class="card-description">
                        <b>Pembayaran SPP</b>
                    </p>
                    <div class="form-group">
                        <label for="">Besar Iuran SPP</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white">$</span>
                            </div>
                            <input type="text" class="form-control" value="{{ old('besar_iuran', @$spp->besar_iuran) }}" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Detail SPP</label>
                        <textarea class="form-control" name="ket_spp" value="{{ old('ket_spp', @$spp->ket_spp) }}" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary"
                                    type="button">Upload</button>
                            </span>
                        </div>
                    </div> <br>

                    <p class="card-description">
                        <b>Pembayaran DSP</b>
                    </p>
                    <div class="form-group">
                        <label for="">Besar Angsuran DSP</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white">$</span>
                            </div>
                            <input type="text" class="form-control" value="{{ old('besar_angsuran', @$dsp->besar_angsuran) }}"aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Sisa Angsuran DSP</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white">$</span>
                            </div>
                            <input type="text" class="form-control" value="{{ old('sisa_angsuran', @$dsp->sisa_angsuran) }}"aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Detail DSP</label>
                        <textarea class="form-control" name="ket_spp" value="{{ old('ket_dsp', @$dsp->ket_dsp) }}" id="exampleTextarea1" rows="4"></textarea>
                    </div> <br>

                    <p class="card-description">
                        <b>Detail Transaksi</b>
                    </p>
                    <div class="form-group">
                        <label for="">Total Transaksi</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-gradient-primary text-white">$</span>
                            </div>
                            <input type="text" class="form-control" value="{{ old('total_transaksi', @$transaksi->total_transaksi) }}"aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-12 col-form-label">Pilih pembayaran</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="Payment" value="" checked>
                                Cash
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="Payment2" value="option2">
                                M-Banking
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Petugas</label>
                        <input type="text" name="thn_ajaran" value="{{ old('nama', @$users->nama) }}" class="form-control form-control-lg" id="exampleFormControlSelect1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tanggal Transaksi</label>
                        <input type="text" name="thn_ajaran" value="{{ old('tgl_transaksi', @$transaksi->tgl_transaksi ) }}" class="form-control form-control-lg" id="exampleFormControlSelect1">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Detail Transaksi </label>
                        <textarea class="form-control" value="{{ old('key_transaksi', @$transaksi->ket_transaksi) }}" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>

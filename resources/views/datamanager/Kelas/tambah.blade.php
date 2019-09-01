@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong> Perhatian </strong> <br/>
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}
            @endforeach
        </ul>
    </div>
@endif

<h1> Tambah Data Kelas </h1>
<form action="{{ url('kelas') }}" method="POST">
    @csrf 

        <div class="form-group">
            <label for="formGroupanama_kelas"> Nama Kelas </label> 
            <input type="text" name="nama_kelas" id="formGroupanama_kelas"  class="form-control" value="{{ old('nama_kelas') }}"> 
	    </div>

        <div class="form-group">
	        <label for="FormControltingkat_kelas"> Tingkat Kelas </label> 
		        <select name="tingkat_kelas" id="FormControltingkat_kelas" class="form-control">
			        <option value="10" {{ old('tingkat_kelas', @$kelas->tingkat_kelas) == '10' ? 'selected' : '' }} > 10 </option>
			        <option value="11" {{ old('tingkat_kelas', @$kelas->tingkat_kelas) == '11' ? 'selected' : '' }} > 11 </option>
			        <option value="12" {{ old('tingkat_kelas', @$kelas->tingkat_kelas) == '12' ? 'selected' : '' }} > 12 </option>
	            </select> 
        </div>

        <div class="form-group">
            <label for="formGroupawali_kelas"> Wali Kelas </label> 
            <input type="text" name="wali_kelas" id="formGroupwali_kelas"  class="form-control" value="{{ old('wali_kelas') }}"> 
	    </div>	

        <div class="form-group">  
		    <button type="submit" class="btn btn-primary">
		    <i class="glyphicon glyphicon-floppy-disk"></i> Simpan </button> 

		    <a href="{{ url('/kelas') }}">
			    <button type="button" class="btn btn-primary">
			    <i class="glyphicon glyphicon-plus"></i> Kembali </button>
		    </a>
	</div>	
</form>	
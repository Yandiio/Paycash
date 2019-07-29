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

<h1> Tambah Data Jurusan </h1>
<form action="{{ url('jurusan') }}" method="POST">
    @csrf 

        <div class="form-group">
            <label for="formGroupanama_jurusan"> Nama Jurusan </label> 
            <input type="text" name="nama_jurusan" id="formGroupanama_jurusan"  class="form-control" value="{{ old('nama_jurusan') }}"> 
	    </div>

        <div class="form-group">  
		    <button type="submit" class="btn btn-primary">
		    <i class="glyphicon glyphicon-floppy-disk"></i> Simpan </button> 

		    <a href="{{ url('/jurusan') }}">
			    <button type="button" class="btn btn-primary">
			    <i class="glyphicon glyphicon-plus"></i> Kembali </button>
		    </a>
	</div>	
</form>	
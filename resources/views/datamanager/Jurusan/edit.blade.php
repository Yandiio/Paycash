
<form action="{{route('jurusan.update',$jurusan->id)}}">
@csrf
@method('PATCH')
    <h1>Edit data Jurusan</h1>
    <div class="modal-group">
        <div class="form-group">
            <label for="">Nama Jurusan</label>
            <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
        </div>
    </div>
    <div class="btn btn-submit">
        <button type="submit">Update</button>
    </div>
</form>

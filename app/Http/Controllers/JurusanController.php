<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use Alert;

class JurusanController extends Controller
{
    public function index() 
    {
        $jurusan = Jurusan::all();
        return view('datamanager.Jurusan.jurusan', compact('jurusan'));
    }

    public function create() 
    {
        return view('datamanager.Jurusan.tambah');
    }

    public function store(Request $request) 
    {
        $rule = [
            'nama_jurusan'    => 'required|string', 
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $jurusan = new \App\Jurusan;
        $jurusan->nama_jurusan      = $input['nama_jurusan'];
        $status = $jurusan->save();

            if($status) {
                Alert::success('Success','Data berhasil Ditambahkan');
                return redirect('/jurusan')->with('success', 'Berhasil Ditambahkan');
            } else {
                return redirect('/jurusan/tambah')->with('Gagal Ditambahkan');
            }
    }

    public function edit(Request $request, $id) 
    {
        $data['jurusan'] = \DB::table('jurusan')->find($id);
        return view('jurusan.tambah', $data);
    }

    public function update() 
    {
        $rule = [
            'nama_jurusan'    => 'required|string', 
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $jurusan = \App\jurusan::find($id);
        $jurusan->nama_jurusan      = $input['nama_jurusan'];
        $status = $jurusan->update();

            if($status) {
                return redirect('/jurusan')->with('success', 'Berhasil Diedit');
            } else {
                return redirect('/jurusan/tambah')->with('Gagal Diedit');
            }
    }

    public function destroy(Request $request, $id) 
    {
        $jurusan = \App\jurusan::find($id); 
        $status = $jurusan->delete();
        
            if($status) {
                return redirect('/jurusan')->with('success', 'Berhasil Dihapus');
            } else {
                return redirect('/jurusan/tambah')->with('Gagal Dihapus');
            }
    }
}

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
        return view('datamanager.Jurusan.jurusan')->with('jurusan',$jurusan);
    }

    public function create() 
    {
        return view('datamanager.jurusan.tambah');
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
        return view('datamanager.Jurusan.edit', $data);
    }

    public function update() 
    {
        $rule = [
            'nama_jurusan'    => 'required', 
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $jurusan = \App\Jurusan::find($id)->first();
        $jurusan->nama_jurusan   = $input['nama_jurusan'];
        $status = $jurusan->update();

            if($status) {
                return redirect('/jurusan')->with('success', 'Berhasil Diedit');
            } else {
                return redirect('/jurusan/tambah')->with('Gagal Diedit');
            }
    }

    public function show(){
        $jurusan = Jurusan::all();
        return view('datamanager.jurusan.show',compact('jurusan'));
    }

    public function destroy(Request $request, $id) 
    {
        $jurusan = \App\Jurusan::find($id)->first(); 
        $status = $jurusan->delete();
        
            if($status) {
                return redirect('/jurusan')->with('success', 'Berhasil Dihapus');
            } else {
                return redirect('/jurusan/tambah')->with('Gagal Dihapus');
            }
    }
}

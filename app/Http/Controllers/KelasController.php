<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use Alert;

class KelasController extends Controller
{
    public function index() 
    {
        $kelas = Kelas::all();
        return view('datamanager.kelas', compact('kelas'));
    }

    public function create() 
    {
        return view('kelas.tambah');
    }

    public function store(Request $request) 
    {
        $rule = [
            'nama_kelas'    => 'required|string', 
            'tingkat_kelas' => 'required',
            'wali_kelas'    => 'required|string',
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $kelas = new \App\Kelas;
        $kelas->nama_kelas      = $input['nama_kelas'];
        $kelas->tingkat_kelas   = $input['tingkat_kelas'];
        $kelas->wali_kelas      = $input['wali_kelas'];
        $status = $kelas->save();

            if($status) {
                alert()->success('Berhasil','Data berhasil ditambahkan');
                return redirect('/kelas');
            } else {
                return redirect('/kelas/tambah')->with('Gagal Ditambahkan');
            }
    }

    public function edit(Request $request, $id) 
    {
        $data['kelas'] = \DB::table('kelas')->find($id);
        return view('kelas.tambah', $data);
    }

    public function update() 
    {
        $rule = [
            'nama_kelas'    => 'required|string', 
            'tingkat_kelas' => 'required',
            'wali_kelas'    => 'required|string',
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $kelas = \App\Kelas::find($id);
        $kelas->nama_kelas      = $input['nama_kelas'];
        $kelas->tingkat_kelas   = $input['tingkat_kelas'];
        $kelas->wali_kelas      = $input['wali_kelas'];
        $status = $kelas->update();

            if($status) {
                return redirect('/kelas')->with('success', 'Berhasil Diedit');
            } else {
                return redirect('/kelas/tambah')->with('Gagal Diedit');
            }
    }

    public function destroy(Request $request, $id) 
    {
        $kelas = \App\Kelas::find($id);
        $status = $kelas->delete();
        
            if($status) {
                return redirect('/kelas');
                Alert::success('Berhasil','data telah dihapus');
            } else {
                return redirect('/kelas/tambah')->with('Gagal Dihapus');
            }
    }
}

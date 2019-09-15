<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use Alert;

class KelasController extends Controller
{
    public function index() 
    {
        $kelas = \App\Kelas::paginate(5);
        return view('datamanager.Kelas.kelas')->with('kelas',$kelas);
    }

    public function create() 
    {
        return view('datamanager.Kelas.tambah');
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

    public function show (Request $request,$id){
        $kelas = Kelas::find($id);
        return view('datamanager.Kelas.show',compact('kelas'));
    }

    public function edit(Request $request, $id) 
    {
        $data['kelas'] = \DB::table('kelas')->find($id);
        return view('datamanager.Kelas.edit', $data);
    }

    public function update(Request $request,$id) 
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
        $kelas = \App\Kelas::findOrFail($id);
        $status = $kelas->delete();
        
            if($status) {
                Alert::success('Berhasil','data telah dihapus');
                return redirect('/kelas');
            } else {
                return redirect('/kelas/tambah')->with('Gagal Dihapus');
            }
    }
}

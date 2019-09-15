<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;
use Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::paginate(5);
        return view ('datamanager.Siswa.siswa',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datamanager.siswa.tambah');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'nama' => 'required|string',
            'kelas' => 'required|integer',
            'foto ' => 'required|integer'
        ];

        $this->validate($request,$rule);

        $input = $request->all();

        $siswa = new \App\Siswa;
        $siswa->nama = $input['nama'];
        $siswa->kelas = $input['kelas'];
        $siswa->jurusan = $input['jurusan'];
        $status = $siswa->save();
        
        if($status){
            Alert::success('');
            return redirect('/siswa')->with('success');
        }else{
            return redirect('/siswa/tambah')->with('Data gagal Ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::all();
        return view('datamanager.siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

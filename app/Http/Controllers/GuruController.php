<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class GuruController extends Controller
{
    //
    public function index()
    {
        $gurus=Guru::latest()->paginate(10);
        return view('guru.index', compact('gurus'));
    }
    public function create()
    {
        return view('guru.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nis'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'mapel'=>'required',
            'telp'=>'required',
            'alamat'=>'required'
        ]);
        DB::table('gurus')->insert([
            'nis'=>$request->nis,
            'nama'=>$request->nama,
            'jk'=>$request->jk,
            'mapel'=>$request->mapel,
            'telp'=>$request->telp,
            'alamat'=>$request->alamat
        ]);
        if(DB::table('gurus')){
            return redirect()->route('guru.index')->with(['success'=>'Data berhasil disimpan']);
        }else{
            return redirect()->route('guru.index')->with(['error'=>'Data gagal disimpan']);
        }
    }
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        $guru->delete();
        if($guru){
            //redirect dengan pesan sukses
            return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('guru.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
    public function update(Request $request, Guru $guru)
    {
    $this->validate($request, [
        
        'nis'=>'required',
        'nama'=>'required',
        'jk'=>'required',
        'mapel'=>'required',
        'telp'=>'required',
        'alamat'=>'required'
        
    ]);
    //get data guru by ID
 
    $guru=Guru::findOrFail($guru->id); 
    $guru->update([
        'nis'=>$request->nis,
        'nama'=>$request->nama,
        'jk'=>$request->jk,
        'mapel'=>$request->mapel,
        'telp'=>$request->telp,
        'alamat'=>$request->alamat
    ]); 
    if($guru){
    //redirect dengan pesan sukses
    return redirect()->route('guru.index')->with(['success'=>'Data berhasil 
    disimpan']);
    }else{
        return redirect()->route('guru.index')->with(['error'=>'Data gagal disimpan']);
    }
    }


}

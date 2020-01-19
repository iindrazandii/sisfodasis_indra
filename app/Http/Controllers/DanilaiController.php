<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Danilai;

class DanilaiController extends Controller
{
    public function index()
    {
    	// mengambil data danilai
    	$danilai = Danilai::all();
 
    	// mengirim data danilai ke view danilai
    	return view('danilai', ['danilai' => $danilai]);
    }
    public function tambah()
    {
    	return view('createdanilai');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kdmapel' => 'required',
            'nisn' => 'required',
            'nilai' => 'required',
        ]);
        Danilai::create([
            'kdmapel' => $request->kdmapel,
            'nisn' => $request->nisn,
            'nilai' => $request->nilai,
        ]);
        return redirect('/danilai');
    }
    public function edit($id)
    {
      $danilai = Danilai::where('id', $id)->get();
    return view('editdanilai', compact('danilai'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'kdmapel' => 'required',
            'nisn' => 'required',
            'nilai' => 'required',
        ]);
     
        $danilai = Danilai::find($id);
        $danilai->kdmapel = $request->kdmapel;
        $danilai->nisn = $request->nisn;
        $danilai->nilai = $request->nilai;
        $danilai->save();
        return redirect('/danilai');
    }
    public function delete($id)
    {
        $danilai = Danilai::find($id);
        $danilai->delete();
        return redirect('/danilai');
    }
}

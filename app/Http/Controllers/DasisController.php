<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dasis;

class DasisController extends Controller
{
    public function index()
    {
    	// mengambil data dasis
    	$dasis = Dasis::all();
 
    	// mengirim data dasis ke view dasis
    	return view('dasis', ['dasis' => $dasis]);
    }
    public function tambah()
    {
    	return view('createdasis');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nisn' => 'required',
    		'nama' => 'required',
    		'tgllhr' => 'required',
    		'temlhr' => 'required',
    		'kelas' => 'required',
    		'alamat' => 'required',
    		'foto' => 'required',
    	]);
        Dasis::create([
    		'nisn' => $request->nisn,
    		'nama' => $request->nama,
    		'tgllhr' => $request->tgllhr,
    		'temlhr' => $request->temlhr,
    		'kelas' => $request->kelas,
    		'alamat' => $request->alamat,
    		'foto' => $request->foto,
    	]);
    	return redirect('/dasis');
    }
     public function edit($id)
    {
      $dasis = Dasis::where('id', $id)->get();
    return view('editdasis', compact('dasis'));
    }
    public function delete($id)
    {
        $dasis = Dasis::find($id);
        $dasis->delete();
        return redirect('/dasis');
    }
}

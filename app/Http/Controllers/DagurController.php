<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dagur;
use App\Dakel;

class DagurController extends Controller
{
    public function index()
    {
      $dagur = Dagur::get();
      $dakel = Dakel::get();
      return view('dagur',compact('dagur','dakel'));
    }
    public function tambah()
    {
    	return view('createdagur');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nip' => 'required',
    		'namaguru' => 'required',
    		'tgllhr' => 'required',
    		'temlhr' => 'required',
    		'golongan' => 'required',
    		'alamat' => 'required',
    		'foto' => 'required',
    	]);
        Dagur::create([
    		'nip' => $request->nip,
    		'namaguru' => $request->namaguru,
    		'tgllhr' => $request->tgllhr,
    		'temlhr' => $request->temlhr,
    		'golongan' => $request->golongan,
    		'alamat' => $request->alamat,
    		'foto' => $request->foto,
    	]);
    	return redirect('/dagur');
    }
    public function edit($id)
    {
      $dagur = Dagur::where('id', $id)->get();
    return view('editdagur', compact('dagur'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'nip' => 'required',
            'namaguru' => 'required',
            'tgllhr' => 'required',
            'temlhr' => 'required',
            'golongan' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);
     
        $dagur = Dagur::find($id);
        $dagur->namaguru = $request->namaguru;
        $dagur->nip = $request->nip;
        $dagur->tgllhr = $request->tgllhr;
        $dagur->temlhr = $request->temlhr;
        $dagur->alamat = $request->alamat;
        $dagur->foto = $request->foto;
        $dagur->save();
        return redirect('/dagur');
    }
    public function delete($id)
    {
        $dagur = Dagur::find($id);
        $dagur->delete();
        return redirect('/dagur');
    }
}

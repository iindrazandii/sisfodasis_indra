<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Dakel;
use App\Dagur;

class DakelController extends Controller
{
    public function index()
    {
    $dagur = Dagur::get();
    $dakel = Dakel::get();
    return view('dakel',compact('dakel','dagur'));
    }
    public function tambah()
    {
        $dagur =  Dagur::all();
       
    	return view('createdakel', $dagur);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_dagur' => 'required',
            'kdkelas' => 'required',
            'namakls' => 'required',
            'walikls' => 'required',
        ]);
        Dakel::create([
            'id_dagur' => $request->id_dagur,
            'kdkelas' => $request->kdkelas,
            'namakls' => $request->namakls,
            'walikls' => $request->walikls,
        ]);
        return redirect('/dakel');
    }
     public function edit($id)
    {
      $dakel = Dakel::where('id', $id)->get();
    return view('editdakel', compact('dakel'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'kdkelas' => 'required',
            'namakls' => 'required',
            'walikls' => 'required',
        ]);
     
        $dakel = Dakel::find($id);
        $dakel->kdkelas = $request->kdkelas;
        $dakel->namakls = $request->namakls;
        $dakel->walikls = $request->walikls;
        $dakel->save();
        return redirect('/dakel');
    }
    public function delete($id)
    {
        $dakel = Dakel::find($id);
        $dakel->delete();
        return redirect('/dakel');
    }
}

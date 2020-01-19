<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dapel;

class DapelController extends Controller
{
    public function index()
    {
    	// mengambil data dapel
    	$dapel = Dapel::all();
 
    	// mengirim data dapel ke view dapel
    	return view('dapel', ['dapel' => $dapel]);
    }
    public function tambah()
    {
    	return view('createdapel');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'kdmapel' => 'required',
            'namamapel' => 'required',
            'namaguru' => 'required',
        ]);
        Dapel::create([
            'kdmapel' => $request->kdmapel,
            'namamapel' => $request->namamapel,
            'namaguru' => $request->namaguru,
        ]);
        return redirect('/dapel');
    }
    public function edit($id)
    {
      $dapel = Dapel::where('id', $id)->get();
    return view('editdapel', compact('dapel'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
           'kdmapel' => 'required',
            'namamapel' => 'required',
            'namaguru' => 'required',
        ]);
     
        $dapel = Dapel::find($id);
        $dapel->kdmapel = $request->kdmapel;
        $dapel->namamapel = $request->namamapel;
        $dapel->namaguru = $request->namaguru;
        $dapel->save();
        return redirect('/dapel');
    }
    public function delete($id)
    {
        $dapel = Dapel::find($id);
        $dapel->delete();
        return redirect('/dapel');
    }
}

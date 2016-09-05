<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cruds;
class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Cruds::orderBy ('id','DESC')->paginate(5);
        
        return view ('show')->with('datas',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'jud'=>'required', //get jud di add.blade.php 
            'isi'=>'required' ]);
        $tambah = new Cruds (); //cruds model 
        $tambah->judul = $request['jud']; //req jud required
        $tambah->isi = $request ['isi'];
        $tambah->save ();
        return redirect()->to ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tampilkan = Cruds::find($id);
        return view ('tampil')->with('tampilkan',$tampilkan);
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
        $tampiledit = Cruds::where('id',$id)->first() ;
        return view ('edit')->with('tampiledit',$tampiledit);
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
        $update = Cruds::where ('id',$id)->first();
        $update->judul = $request['jud'];
        $update->isi = $request['isi'];
        $update->update ();
        return redirect()->to ('/');

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
        $hapus = Cruds::find($id);
        $hapus->delete();
        return redirect()->to ('/');
    }
}

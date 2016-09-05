<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cruds;
class CariController extends Controller
{
    //
    public function search (Request $Request){
    	$query = $Request->get('cari');
    	$hasil = Cruds::where('judul','LIKE','%' .$query.'%')->orWhere('isi','LIKE','%' .$query.'%')->paginate(3);
    	// $hasil = Cruds::where('isi','LIKE','%' .$query.'%', 'OR', 'judul','LIKE','%' .$query.'%')->paginate(3);
    	return view ('result', compact('hasil','query'));
     }
}

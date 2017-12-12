<?php

namespace App\Http\Controllers;
use App\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function create(Request $request){
        Artikel::create($request->all());
        return ('oke');
    }

    public function view(Request $request){
        $data['artikel']= Artikel::all();
        return view('artikelview',$data);
    }

    public function edit(Request $request,$id){
        $data['artikel']= Artikel::where('id',$id)->first();
        return view('artikelupdate',$data);
        // return $data;
    }

    public function update(Request $request){
        $update=Artikel::find($request->id);
        $update->judul=$request->judul;
        $update->isiArtikel=$request->isiArtikel;
        $update->save();
        return ('oke');
        // return $update;
    }

    public function delete(Request $request){
        $delete=Artikel::find($request->id);
        $delete->delete();
        return('deleted');
        
    }
}

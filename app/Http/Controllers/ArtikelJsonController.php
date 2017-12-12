<?php

namespace App\Http\Controllers;
use App\Artikel;

use Illuminate\Http\Request;

class ArtikelJsonController extends Controller
{
    public function index(){
        $articles = Artikel::all();
        return response()->json($articles);
      }
   
      public function show($id){
        $articles = Artikel::find($id);
        if($articles) {
          return response()->json($articles);
        } else {
          return response()->json('not found',404);
        }
      }
   
      public function store(Request $request){
        $artikel = Artikel::create($request->all());
        if($artikel) {
          return response()->json($artikel,201);
        } else {
          return response()->json('artikel gagal di buat',400);
        }
      }
   
      public function update(Request $request,$id){
        $articles = Artikel::find($id);
        if($articles) {
          $articles->update($request->all());
          return response()->json($articles);
        } else {
          return response()->json('not found',404);
        }
      }
   
      public function destroy($id){
        $articles = Artikel::find($id);
        if($articles) {
          $articles->delete();
          return response()->json('deleted');
        } else {
          return response()->json('not found',404);
        }
      }
}

<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index (){
        $lista = Comic::all();
        return view('comics/index', ['utente'=>'Luca', 'fumetti' => $lista]);
    }

   // public function show($id){
   //     $fumetto = Comic::find($id);
   //     return $fumetto;
   // }

   // public function show(Comic $comic){
    //    return $comic;
   // }

    public function show (Comic $comic){
        return view('comics/show', ['fumetto' => $comic]);
    }

    public function create (){
        return view('comics/create');
    }

    public function store (Request $request){
            $newComic = new Comic();
            $newComic -> title = $request['title'];
            $newComic -> description = $request['description'];
            $newComic -> thumb = $request['thumb'];
            $newComic -> price = $request['price'];
            $newComic -> series = $request['series'];
            $newComic -> sale_date = $request['sale_date'];
            $newComic -> type = $request['type'];
            $newComic -> save();
        return redirect()->route('comics.index');
    }
}

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
}

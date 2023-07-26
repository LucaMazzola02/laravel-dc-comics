<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    public function index(){
        $comicsList = Comic::all();
        return view('guest.comic.index', compact('comicsList'));
    } 
}

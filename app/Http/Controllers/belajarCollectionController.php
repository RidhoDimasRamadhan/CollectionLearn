<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Collection;

class belajarCollectionController extends Controller
{
    public function controller(){
     $array = collect(['ridho','dimas']);

     dd($array);
    }
}

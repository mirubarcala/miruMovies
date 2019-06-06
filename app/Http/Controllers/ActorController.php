<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor; 


class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        dd($actors);
        return view('actors')->with('actors', $actors);
    }
    public function getActorName()
    {
     
    }
}

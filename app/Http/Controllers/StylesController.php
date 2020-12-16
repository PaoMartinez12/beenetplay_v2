<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StylesController extends Controller
{
    //

     //Mostrar vista Login
     public function index()
     {  
        $style= \App\Style::all();

        //dd($style);
         return view('layouts.template', compact('style'));
      }
 
}

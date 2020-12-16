<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;

class StylesController extends Controller
{
    //

     //Mostrar vista Login
     public function index()
     {  
        $style= \App\Style::all();

        //Cookie::make('name', $style);
        //dd($style);
         return view('layouts.template', compact('style'));
      }
 
      
}

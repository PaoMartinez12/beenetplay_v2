<?php
use Illuminate\Http\Request;
use App\Style;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    $data = Style::all()->first();
    
    //dd($data->iconNavBarColor);

    if ($data == null) {
        //Guardando configuracion por defecto
        $request->session()->put('backgroundColor', '#2E2E2E');
        $request->session()->put('navBarColor', '#FFFFFF');
        $request->session()->put('iconNavBarColor', '#FF6600');
        $request->session()->put('footerColor', '#FFFF66');
        $request->session()->put('textFooterColor', '#2E2E2E');
        $request->session()->put('textCategoryColor', '#f74016');
        $request->session()->put('navBarLogo', 'https://beenet.com.sv/app/recursos_cmsbee/NextTV_logo.png');
        $request->session()->put('footerLogo', 'https://beenet.com.sv/app/recursos_cmsbee/NextTV_logo.png');
        $request->session()->put('loginLogo', 'https://beenet.com.sv/app/recursos_cmsbee/NextTV_logo.png');
        $request->session()->put('slideItem', '4');
    }else{
        //Guardando como variable de Session
        $request->session()->put('backgroundColor', $data->backgroundColor);
        $request->session()->put('navBarColor', $data->navBarColor);
        $request->session()->put('iconNavBarColor', $data->iconNavBarColor);
        $request->session()->put('footerColor', $data->footerColor);
        $request->session()->put('textFooterColor', $data->textFooterColor);
        $request->session()->put('textCategoryColor', $data->textCategoryColor);
        $request->session()->put('navBarLogo', $data->navBarLogo);
        $request->session()->put('footerLogo', $data->footerLogo);
        $request->session()->put('loginLogo', $data->loginLogo);
        $request->session()->put('slideItem', $data->slideItem);

    }
    
    //valida si existe la variable
    //if ($request->session()->has('slideItem')) { }

    return view('layouts.template');
});

Route::get('/portfolio', function (Request $request) {
    
    return view('pages.portfolio');

});

Route::get('/player', function (Request $request) {

    return view('pages.player');

});

<?php

use Illuminate\Support\Facades\Route;
use App\Models\Lead;


Route::get('/', function () {
    return view('home');
});

Route::get('/leads', function(){
    return view('leads', [
        'leads' => Lead::all()
    ]);
});

Route::get('/leads/{id}', function($id){
    $lead = Lead::find($id);

    return view('lead', ['lead' => $lead]);
});

Route::get('/relatorios', function(){
    return view('relatorios');
});
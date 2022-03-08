<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/ping', function(){
    return ['pong' => true];
});

Route::post('/cadastro', [ApiController::class, 'criandoUsuario']);
Route::get('/ping', function(){
    return json_encode('pong');

});
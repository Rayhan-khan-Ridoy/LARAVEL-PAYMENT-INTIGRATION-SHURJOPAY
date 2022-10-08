<?php

use Illuminate\Support\Facades\Route;

Route::get('calc',function(){
    return 'ok';
});
Route::get('/add/{a}/{b}', [Ridoy\Calcpackage\Http\Controllers\calController::class, 'add']);
Route::get('/sub/{a}/{b}', [Ridoy\Calcpackage\Http\Controllers\calController::class, 'sub']);
Route::get('/mul/{a}/{b}', [Ridoy\Calcpackage\Http\Controllers\calController::class, 'mul']);
Route::get('/div/{a}/{b}', [Ridoy\Calcpackage\Http\Controllers\calController::class, 'div']);

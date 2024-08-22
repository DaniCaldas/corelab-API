<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tarefas', [TarefasController::class, 'index'] );
Route::post('tarefas', [TarefasController::class, 'store']);
Route::put('tarefas/{id}', [TarefasController::class, 'update']);
Route::delete('tarefas/{id}', [TarefasController::class, 'delete']);
Route::middleware(['cors'])->group(function () {
    Route::post('/hogehoge', 'Controller@hogehoge');
});
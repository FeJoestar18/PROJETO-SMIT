<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\SubscripitionControlller;

//CLIENTES ROTAS
Route::get('/', [ClubeController::class, 'index']);
Route::get('/clubs/store', [ClubeController::class, 'buySubscription']);
Route::get('/produtos', [ClubeController::class, 'Produtos']);
Route::get('/MinhasAssinaturas', [ClubeController::class, 'MySubscriptions']);



//ADMIN ROTAS
Route::get('/admin/adminHome', [ClubeController::class, 'admin']); //ADMIN HOME

//CRIAR CLUBES
Route::get('/admin/createClube', [ClubController::class, 'createClube']);
Route::post('/admin/clubs/Store', [ClubController::class, 'storeClub']);

//CRIAR ASSINATURAS
Route::get('/admin/CreateSubscription', [SubscripitionControlller::class, 'CreateSubscription']);
Route::post('/admin/clubs/subscriptions', [SubscripitionControlller::class, 'storeSubscription']);

//VISUALIZAR CLUBES
Route::prefix('admin')->group(function () {
    Route::post('/clubs', [ClubController::class, 'storeClub']);
    Route::get('/seeclubs', [ClubController::class, 'seeClubs']);
    Route::post('/admin/editclubs', [ClubController::class, 'editClubs']);
    Route::delete('/{id}', [ClubController::class, 'destroy'])->name('destroy');
});


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
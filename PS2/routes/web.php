<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubeController;

//CLIENTES ROTAS
Route::get('/', [ClubeController::class, 'index']);
Route::get('/clubs/buy_subscription', [ClubeController::class, 'buySubscription']);
Route::get('/produtos', [ClubeController::class, 'Produtos']);
Route::get('/MinhasAssinaturas', [ClubeController::class, 'MySubscriptions']);



//ADMIN ROTAS
Route::get('/admin/adminHome', [ClubeController::class, 'admin']); //ADMIN HOME

//CRIAR CLUBES
Route::get('/admin/createClube', [ClubeController::class, 'createClube']);
Route::post('/admin/clubs', [ClubeController::class, 'storeClub'])->name('clubs.store');

//CRIAR ASSINATURAS
Route::get('/admin/CreateSubscription', [ClubeController::class, 'CreateSubscription']);
Route::post('/admin/subscriptions', [ClubeController::class, 'storeSubscription'])->name('subscriptions.store');
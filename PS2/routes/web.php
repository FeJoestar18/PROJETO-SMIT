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

//CRIAR CLUBES
    Route::get('/admin/createClube', [ClubController::class, 'createClube']);
    Route::post('/admin/clubs/store', [ClubController::class, 'storeClub']);


//CRIAR ASSINATURAS
    Route::get('/admin/CreateSubscription', [SubscripitionControlller::class, 'CreateSubscription']);
    Route::post('/admin/clubs/subscriptions', [SubscripitionControlller::class, 'storeSubscription']);





//HOME ADMIN
    Route::get('/admin/adminHome', [ClubeController::class, 'admin']);

//ROTAS ADMIN CLUBES E SUBSCRIPTION
    Route::prefix('admin')->group(function () {
        // ROTAS DE VISUALIZAR CLUBS
        Route::post('/clubs', [ClubController::class, 'storeClub']);
        Route::get('/seeclubs', [ClubController::class, 'seeClubs'])->name('seeclubs');

        // ROTAS DE EDITAR E ATUALIZAR CLUBS
        Route::get('/editClub/{id}', [ClubController::class, 'editClubs'])->name('editClubs');
        Route::post('/editClub/{id}', [ClubController::class, 'updateClubs']);

        //ROTAS DE DELETAR CLUBS
        Route::delete('/deleteClub/{club}', [ClubController::class, 'destroy'])->name('destroy');

   });

   



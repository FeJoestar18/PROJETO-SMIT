<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\ClubSubscription;
class ClubeController extends Controller
{
    
   
//HOME ADMIN
    public function admin(){
        return view('admin.adminHome');
    }
  
   
    //CLIENT FUNCTIONS


    //HOME CLIENTE
    public function index()
    {
        $Clubs = Club::all();
        return view('home', ['Club' => $Clubs]);
    }

    //COMPRAR ASSINATURA
    public function buySubscription()
{
    $Club = Club::all();
        return view('clubs.store', ['Club' => $Club]);

    
}
//MINHAS ASSINATURAS

public function MySubscriptions(){
    return view('MinhasAssinaturas');
}
}

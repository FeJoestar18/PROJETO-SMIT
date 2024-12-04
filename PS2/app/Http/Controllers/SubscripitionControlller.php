<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClubSubscription;
use App\Models\Club;

class SubscripitionControlller extends Controller
{
    public function createSubscription()
{
    $club = Club::all();
    return view('admin.createSubscription', compact('club'));
}
    public function storeSubscription(Request $request)
{

    
   $clubSubscription = new ClubSubscription();
   $clubSubscription->name = $request->name;
   $clubSubscription->description = $request->description;
   $clubSubscription->price = $request->price;
   $clubSubscription->active = $request->has('active') ? 1 : 0; // Atribui 1 se o campo 'active' estiver presente no request, senão atribui 0
   $clubSubscription->started_at = $request->started_at;
   $clubSubscription->ended_at = $request->ended_at;
   $clubSubscription->club_id = $request->club_id;
   $clubSubscription->save();

  
    return redirect('/admin/adminHome')->with('success', 'Assinatura criada com sucesso!');
}
}

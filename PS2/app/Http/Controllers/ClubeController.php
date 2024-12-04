<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\ClubSubscription;
class ClubeController extends Controller
{
    //ADMIN FUNCTIONS
    public function createClube(){

        return view('admin.createClube');
    }
    public function CreateSubscription(Request $request)
    {
        return view('admin.CreateSubscription');
    
    }

    //STORE FUNCTIONS


    //STORE CLUB
    public function storeClub(Request $request)
{
   

    $club = new Club();
    $club->name = $request->name;
    $club->description = $request->description;
    $club->num_subscriptions = $request->num_subscriptions;
    $club->save();

    return redirect('/admin/adminHome')->with('success', 'Clube criado com sucesso!');
}

//STORE SUBSCRIPTION

public function storeSubscription(Request $request)
{
    
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'active' => 'required|boolean',
        'started_at' => 'nullable|date',
        'ended_at' => 'nullable|date',
        'club_id' => 'required|exists:clubs,id',
    ]);

    $clubSubscription = new ClubSubscription;
    $clubSubscription->name = $validatedData['name'];
    $clubSubscription->description = $validatedData['description'];
    $clubSubscription->price = $validatedData['price'];
    $clubSubscription->active = $validatedData['active'];
    $clubSubscription->started_at = $validatedData['started_at'];
    $clubSubscription->ended_at = $validatedData['ended_at'];
    $clubSubscription->club_id = $validatedData['club_id'];
    $clubSubscription->save();

  
    return redirect('/admin/adminHome')->with('success', 'Assinatura criada com sucesso!');
}

    
   
//HOME ADMIN
    public function admin(){
        return view('admin.adminHome');
    }
  
   
    //CLIENT FUNCTIONS
    public function index()
    {
        $Clubs = Club::all();
        return view('home', ['Club' => $Clubs]);
    }

    public function buySubscription()
{
    $Club = Club::all();
        return view('clubs.buy_subscription', ['Club' => $Club]);

    
}
public function MySubscriptions(){
    return view('MinhasAssinaturas');
}
}

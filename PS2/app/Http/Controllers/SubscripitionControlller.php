<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClubSubscription;
use App\Models\Club;


// CONTROLLER DE ASSINATURAS

class SubscripitionControlller extends Controller
{

    // CRIAR ASSINATURA
    public function createSubscription()
{
    $club = Club::all();
    return view('admin.createSubscription', compact('club'));
}

// SALVAR ASSINATURA
    public function storeSubscription(Request $request)
{

   $clubSubscription = new ClubSubscription();
   $clubSubscription->name = $request->name;
   $clubSubscription->description = $request->description;
   $clubSubscription->price = $request->price;
   $clubSubscription->active = $request->has('active') ? 1 : 0;
   $clubSubscription->started_at = $request->started_at;
   $clubSubscription->ended_at = $request->ended_at;
   $clubSubscription->club_id = $request->club_id;
   $clubSubscription->save();

  
    return redirect('/admin/adminHome')->with('success', 'Assinatura criada com sucesso!');
}

// VER ASSINATURAS
       public function seeSubscriptions()
    {
        $subscriptions = ClubSubscription::with('club')->get();
        return view('admin.SeeSubscription', compact('subscriptions'));
    }

    // EDITAR ASSINATURA
        public function editSubscription($id)
    {
        $subscription = ClubSubscription::findOrFail($id); 
        $clubs = Club::all(); 
        return view('admin.editSubscription', compact('subscription', 'clubs'));
    }

    // ATUALIZAR ASSINATURA
    
    public function updateSubscription(Request $request, $id)
    {
        $subscription = ClubSubscription::findOrFail($id);
        $subscription->name = $request->name;
        $subscription->description = $request->description;
        $subscription->price = $request->price;
        $subscription->active = $request->has('active') ? 1 : 0;
        $subscription->started_at = $request->started_at;
        $subscription->ended_at = $request->ended_at;
        $subscription->club_id = $request->club_id;
        $subscription->save();

        return redirect('/admin/seesubscriptions')->with('success', 'Assinatura atualizada com sucesso!');
    }

    // DELETAR ASSINATURA
    public function destroySubscription($id)
    {
        $subscription = ClubSubscription::findOrFail($id);
        $subscription->delete();

        return redirect('/admin/seesubscriptions')->with('success', 'Assinatura deletada com sucesso!');
    }
}


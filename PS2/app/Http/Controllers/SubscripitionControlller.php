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
   $clubSubscription->active = $request->has('active') ? 1 : 0;
   $clubSubscription->started_at = $request->started_at;
   $clubSubscription->ended_at = $request->ended_at;
   $clubSubscription->club_id = $request->club_id;
   $clubSubscription->save();

  
    return redirect('/admin/adminHome')->with('success', 'Assinatura criada com sucesso!');
}
    // Exibe a view com todas as assinaturas
    public function seeSubscriptions()
    {
        $subscriptions = ClubSubscription::with('club')->get(); // Pega todas as assinaturas com o clube associado
        return view('admin.SeeSubscription', compact('subscriptions'));
    }

    // Exibe o formulário de edição para uma assinatura específica
    public function editSubscription($id)
    {
        $subscription = ClubSubscription::findOrFail($id); // Encontra a assinatura ou retorna um 404 se não existir
        $clubs = Club::all(); // Pega todos os clubes para o select de clubes
        return view('admin.editSubscription', compact('subscription', 'clubs'));
    }

    // Atualiza a assinatura no banco de dados
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

        return redirect('/seesubscriptions')->with('success', 'Assinatura atualizada com sucesso!');
    }

    // Deleta uma assinatura
    public function destroySubscription($id)
    {
        $subscription = ClubSubscription::findOrFail($id);
        $subscription->delete();

        return view('admin.SeeSubscription')->with('success', 'Assinatura deletada com sucesso!');
    }
}


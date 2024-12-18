<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

//CONTROLLER DE CLUBES

class ClubController extends Controller
{
    

    //CRIAR CLUBS
    public function createClube()
    {
        return view('admin.createClube');
    }

   //VISUALIZAR CLUBS
    public function seeClubs()
    {
        $clubs = Club::all(); 
        return view('admin.SeeClubs', ['clubs' => $clubs]);
    }

    //DELETAR CLUB
    public function destroy(Club $club)
{
   
        $club->delete();
        return redirect()->route('seeclubs');
    
    
}
    
//EDITAR CLUB
public function editClubs($id)
{
    $club = Club::findOrFail($id); 
    return view('admin.editClubs', compact('club')); e
}

//ATUALIZAR CLUB
public function updateClubs(Request $request, $id)
{
    
    $request->validate([
        'name' => 'required|max:255',
        'description' => 'required|max:500',
    ]);

    
    $club = Club::findOrFail($id);
    $club->name = $request->name;
    $club->description = $request->description;
    $club->num_subscriptions = $request->num_subscriptions;
    $club->save(); 

   
    return redirect()->route('seeclubs')->with('success', 'Clube atualizado com sucesso!');
}


    //CRIAR CLUB
    public function storeClub(Request $request)
    {
        $club = new Club();
        $club->name = $request->name;
        $club->description = $request->description;
        $club->num_subscriptions = $request->num_subscriptions;
        $club->save();

        return redirect('/admin/adminHome')->with('success', 'Clube criado com sucesso!');
    }

    
     
}

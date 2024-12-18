<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    // Método para exibir a página de criação de clube
    public function createClube()
    {
        return view('admin.createClube');
    }

    // Método para exibir a página de visualização dos clubes
    public function seeClubs()
    {
        $clubs = Club::all(); 
        return view('admin.editAndDestroy', ['clubs' => $clubs]);
    }

    public function destroy(Club $club)
{
   
        $club->delete();
        return redirect()->route('seeclubs');
    
    
}

    

    // Método para exibir a página de edição de clubes
    public function editClubs()
    {
        return view('admin.editClubs');
    }

    // Método para salvar um novo clube no banco de dados
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

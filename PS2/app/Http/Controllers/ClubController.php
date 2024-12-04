<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function createClube(){
        return view('admin.createClube');
    }

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
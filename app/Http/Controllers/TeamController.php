<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TeamController extends Controller
{
    public function team() {
        {
            $team = Team::all();
            return view('members', ['team' => $team]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Team as Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TeamController extends Controller
{
    public function index() {
            $team = Model::all();
//            $team = [
//              ['name' => 'Vasiliy', 'position' => 'Operator'],
//              ['name' => 'Egor', 'position' => 'Developer'],
//              ['name' => 'Anastasia', 'position' => 'Designer'],
//              ['name' => 'Serega', 'position' => 'Dvornik']
//            ];

            return view('team.index', ['team' => $team]);
    }
    public function show($id) {
        $member = Model::select([ 'name', 'position'])->where('id', $id)->first();

        return view('team.show', compact('member'));
    }
}

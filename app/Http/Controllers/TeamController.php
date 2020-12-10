<?php

namespace App\Http\Controllers;

use App\Models\Team as Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TeamController extends Controller
{
    public function index() {
            $team = Model::all();

            foreach($team as $body) {
                $body = $body->body;

                if (strlen($body) > 5) {
                    $body = mb_substr($body, 0, 2) . '...';
                }
            }
//            $team = [
//              ['name' => 'Vasiliy', 'position' => 'Operator'],
//              ['name' => 'Egor', 'position' => 'Developer'],
//              ['name' => 'Anastasia', 'position' => 'Designer'],
//              ['name' => 'Serega', 'position' => 'Dvornik']
//            ];

            return view('team.index', compact('team', 'body'));
//            return view('team.index', ['team' => $team, 'body' => $body]);
    }
    public function show($id) {
        $member = Model::all()->where('id', $id)->first();
//        $member = Model::select([ 'name', 'position', 'body'])->where('id', $id)->first();

        return view('team.show', compact('member'));
    }
}

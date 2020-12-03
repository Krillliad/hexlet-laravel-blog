<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index() {
        $informational = Information::all();

        // compact('articles') => [ 'articles' => $articles ]
        return view('information.index', compact('informational'));
    }


    public function show($id) {
//        $information = Information::findOrFail($id);
        $information = Information::select([ 'name', 'body'])->where('id', $id)->first();

        return view('information.show', compact('information'));
    }
}

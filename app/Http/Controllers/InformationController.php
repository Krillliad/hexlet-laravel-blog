<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(Request $request) {
        $informational = Information::all();
        $search = $request->input('search');

        if ($search) {
            $informational = Information::where('name' , 'like', '%'.$search.'%')->get();
        }

//        $search ? $informational = Information::where('name' , 'like', '%'.$search.'%')->get() : $informational;

        return view('information.index', compact('informational'));
    }


    public function show($id) {
//        $information = Information::findOrFail($id);
        $information = Information::select([ 'name', 'body'])->where('id', $id)->first();

        return view('information.show', compact('information'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DorouController extends Controller
{
    public function about()
    {
        return view('about');
    }
}

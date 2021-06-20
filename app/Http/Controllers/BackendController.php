<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function pace()
    {
        sleep(10);
        return response()->json(['message'=>"this is pace message"]);
    }
}

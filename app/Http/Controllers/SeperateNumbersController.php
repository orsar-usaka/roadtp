<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeperateNumbersController extends Controller
{
    public function ParseNumbers(Request $request)
    {
        dd($request);
        $numbers = $request->all();
    }
}

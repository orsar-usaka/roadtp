<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function getCity($id)
    {
        $res = DB::table('states')
        ->join('l_g_a_s','states.id','=','l_g_a_s.state_id')
        ->where('states.id', $id)
        ->get();
        return response()->json($res);
    }
}

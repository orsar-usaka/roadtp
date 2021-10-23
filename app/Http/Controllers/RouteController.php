<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $routes = Route::where()->get();
        return view('pages.client.available-routes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        /**
         * "origin_state_id" => "5"
         * "origin_lga_id" => "91"
         * "destination_state_id" => "20"
         * "destination_lga_id" => "370"
         * "departure_date" => "2021-10-21"
         */

        $route = Route::where([
            ['location_lga_id', $request->origin_lga_id],
            ['location_state_id', $request->origin_state_id],
            ['destination_lga_id', $request->destination_lga_id],
            ['destination_state_id', $request->destination_state_id]
        ])->first();

        $available_vehicles = Flight::where('route_id', $route->id)->get();
        // dd($available_vehcles);
        return view('pages.client.available-routes', ['available_vehicles' => $available_vehicles, 'route' => $route]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }
}

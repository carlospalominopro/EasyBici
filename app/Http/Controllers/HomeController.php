<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        
        $user = \App\Models\BikeUser::select('*')
        ->join('types','bike_users.id_type','types.id_type')
        ->join('bike_information_user','bike_users.cod_bu','bike_information_user.cod_bu')
        ->join('statuses','bike_information_user.id_bike','statuses.id_bike')
        ->get();

        return view('home')->with(['user' => $user]);
    }
}

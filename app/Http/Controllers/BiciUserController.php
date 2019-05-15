<?php

namespace App\Http\Controllers;

use App\BiciUser;
use Illuminate\Http\Request;

class BiciUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$estudiante = \App\Models\BiciUser::select('cod_st','name_st')->get();
        
        $user = \DB::table('bike_users')
        ->select(\DB::raw('bike_users.cod_bu, name_bu, surname_bu, email, name_type, brand_bike, name_status'))
        ->join('types','bike_users.id_type','types.id_type')
        ->join('bike_information_user','bike_users.cod_bu','bike_information_user.cod_bu')
        ->join('statuses','bike_information_user.id_bike','statuses.id_bike')->get();



        return view('Home.index')
            ->with(['user' => $user]);
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
     * @param  \App\BiciUser  $biciUser
     * @return \Illuminate\Http\Response
     */
    public function show(BiciUser $biciUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BiciUser  $biciUser
     * @return \Illuminate\Http\Response
     */
    public function edit(BiciUser $biciUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BiciUser  $biciUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BiciUser $biciUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BiciUser  $biciUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiciUser $biciUser)
    {
        //
    }
}

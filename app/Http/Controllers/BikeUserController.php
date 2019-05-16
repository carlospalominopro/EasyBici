<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeUserController extends Controller
{
    public function index(){

    	$user = \App\Models\BikeUser::select('*')->get();

    	return view('BikeUser.index')->with(['user'=>$user]);
    }

    public function update(){

    	return view('BikeUser.update');
    }

    public function destroy(){

    	return view('BikeUser.destroy');
    }
}

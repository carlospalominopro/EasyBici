<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index(Request $request){

      $codigo = $request->input('id');

      $user = \App\Models\BikeUser::select('*')->get();

      $validar = 0;

      foreach ($user as $key => $value) {
        if($user[$key]->cod_bu == $codigo)
        {
          $validar = 1;
        }
      }
      
      return view('RegisterUser.Query')->with(['codigo'=>$codigo, 'validar'=>$validar]);

    }
}

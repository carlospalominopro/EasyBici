<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    
    public function index()
    {

    	$type = \DB::table('types')
        ->select(\DB::raw('name_type'))->get();

    	return view('RegisterUser.index')->with(['type'=> $type]);
    }

    public function create(Request $request){

    	//se reciben los datos del formulario 

   		$id = $request->input('id');
   		$nombre = $request->input('nombre');
   		$apellido = $request->input('apellido');
   		$email = $request->input('email');
   		$type = $request->input('type');
   		$genero = $request->input('Genero');

		  $data = [

          'cod_bu'=> $id,
	        'name_bu'=>$nombre,
	        'surname_bu'=>$apellido,
	        'email'=>$email,
	        'id_type'=>$type,
	        'gender'=>$genero,
		
		  ];

      $user = \App\Models\BikeUser::select('*')->get();

      $validar = 0;

      foreach ($user as $key => $value) {
        if(($user[$key]->cod_bu == $id) || ($user[$key]->email == $email))
        {
          $validar = 1;
        }
      }

      if($validar ==0)
      {
		    
        \App\Models\BikeUser::create($data);

      }


   		return view('RegisterUser.create')->with(['validar'=>$validar, 'id'=>$id]);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterBikeController extends Controller
{
     public function create(Request $request){

      //se reciben los datos del formulario registro bici

      $id_bike = $request->input('id_bike');
      $codigo = $request->input('cod_bu');
      $desc = $request->input('description');
      $color = $request->input('color');
      $foto = $request->input('foto');
      $marca = $request->input('marca');

      // echo $id_bike;
      // echo $codigo;
      // echo $desc;
      // echo $color;
      // echo $foto;
      // echo $marca;

      $data = [

          'id_bike'=> $id_bike,
          'cod_bu'=> $codigo,
          'description_bike'=>$desc,
          'color_bike'=>$color,
          'photo_bike'=>$foto,
          'brand_bike'=>$marca,
    
      ];

      $bike = \App\Models\BikeUser::select('*')->get();

      $validar = 0;

      foreach ($bike as $key => $value) {
        if($bike[$key]->cod_bu == $codigo)
        {
          $validar = 1;
        }
      }

      if($validar ==1)
      {
        
        \App\Models\Bike::create($data);

      }


      return view('RegisterUser.createBike')->with(['validar'=>$validar]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentDatesController extends Controller
{
    

	public function index()
	{


		// $estudiante = \app\Models\Student::select('cod_st','name_st')->get();

		echo "<pre>";
		print_r($estudiante); exit();

		
		// $estudiante = \DB::table('Student')
  //           ->select(\DB::raw('cod_st, name_st'))->get();



        return view('Login.index')
            ->with(['estudiante' => $estudiante]);


	}


}

<?php

use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(array(
            0 => 
            array (
                'id_type' => 1,
                'name_type' => 'Estudiante',
            ),

            1 => 
            array (
                'id_type' => 2,
                'name_type' => 'Profesor',
            ),

            2 => 
            array (
                'id_type' => 3,
                'name_type' => 'Vigilante',
            ),

            3 => 
            array (
                'id_type' => 4,
                'name_type' => 'Otr@',
            ),


        ));
    }
}

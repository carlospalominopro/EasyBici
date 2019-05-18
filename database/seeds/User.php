<?php

use Illuminate\Database\Seeder;

class User extends Seeder
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
                'id' => 1,
                'name' => 'Administrador',
                'password' => '$2y$10$Lk74ZQ/8G6zeZJDwNQCsR.B3LtBjrfGsc0qEHwtfBQTAtaRs5MMyG';
                'email'=>'carlospalominopro@gmail.com',
            ),
        ));
    }
}

<?php

namespace App\Models;

use Eloquent as Model;

class BikeUser extends Model
{

    public $table = 'bike_users';
    
    public $fillable = [
        'cod_bu',
        'name_bu',
        'surname_bu',
        'email',
        'id_type',
        'gender'
    ];

    
}

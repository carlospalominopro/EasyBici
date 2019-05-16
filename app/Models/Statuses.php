<?php

namespace App\Models;

use Eloquent as Model;

class Statuses extends Model
{
    public $table = 'statuses';


	public $fillable = [

        'id_bike', 'cod_bu', 'name_status',
    ];
}

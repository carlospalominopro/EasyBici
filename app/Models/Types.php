<?php

namespace App\Models;

use Eloquent as Model;

class Types extends Model
{
    public $table = 'statuses';


	public $fillable = [

        'id_type', 'name_type',
    ];
}

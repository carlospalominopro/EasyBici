<?php

namespace App\Models;

use Eloquent as Model;

class ExitUser extends Model
{
    public $table = 'exit_user_bike';

	public $fillable = [

        'date_exit', 'cod_bu',
    ];
}

<?php

namespace App\Models;

use Eloquent as Model;

class EntryUser extends Model
{
    public $table = 'entry_user_bike';

	public $fillable = [

        'date_entry', 'cod_bu',
    ];
}

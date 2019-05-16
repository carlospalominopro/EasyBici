<?php

namespace App\Models;

use Eloquent as Model;

class Bike extends Model
{
    public $table = 'bike_information_user';

	public $fillable = [
        'id_bike', 'cod_bu', 'description_bike', 'color_bike', 'photo_bike','brand_bike',
    ];
}

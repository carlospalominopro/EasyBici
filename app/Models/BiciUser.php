<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiciUser extends Model
{
    protected $table = "BiciUser";
    protected $primaryKey = "cod_bu";

    public $fillable = [
        'cod_bu',
        'name_bu',
        'surname_bu',
        'email',
        'photo_bu',
        'status_id',
    ];
}

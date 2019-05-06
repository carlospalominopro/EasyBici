<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "student";
    protected $primaryKey = "cod_st";

    protected $fillable = [
        'cod_st',
        'name_st',
        'surname_st',
        'email',
        'photo_st',
        'status_id',
    ];


    
}

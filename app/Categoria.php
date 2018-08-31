<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'tc_categoria';

    protected $fillable =
    [
        'descripcion',
        'estado',        
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competicion extends Model
{
    protected $table = 'tc_competicion';
    protected $fillable = ['descripcion','estado','anio','dedicatoria'];
    protected $hidden = ['created_at','updated_at'];
}

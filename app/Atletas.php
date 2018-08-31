<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Atletas extends Model
{
    protected $table ='tt_atleta';
    protected $fillable = ['nombres', 'apellidos','dpi','genero','telefono','fecha_nacimiento','email','descripcion','id_categoria','id_competicion','pais','direccion'];
    protected $hidden = ['created_at','updated_at'];

    public function Categoria()
    {
        return $this->hasOne('App\Categoria','id','id_categoria');
    }

    public function Competicion()
    {
        return $this->hasMany('App\Competicion','id','id_competicion');
    }




}

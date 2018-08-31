<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atletas;
use App\categoria;
use App\Competicion;
use Illuminate\Support\Facades\Response;

class EstadisticasController extends Controller
{
    public function Total_Atletas()
    {
        $atletas=Atletas::select(
            \DB::raw("Count(*) as 'Total Participantes'")
        )->get();
        return response()->json(['atletas'=>$atletas]);
    }
    public function Atletas_by_Categoria()
    {
        $atletas=Atletas::join('tc_categoria','tc_categoria.id','=','id_categoria')
        ->select(
            'tc_categoria.nombre as Categoria',
            \DB::raw('Count(*) as total'),
            'tc_categoria.descripcion  as Descripcion'
        )
        ->groupBy('id_categoria')
        ->get(); 
        
        return response()->json(['Atletas'=>$atletas]);
    }
    public function Atletas_by_Genero()
    {
       $atletas=Atletas::select(
           
        \DB::raw('COUNT(*) as Total'),
        'genero as Genero')
        ->groupBy('genero')
        ->get();

        return response()->json(['atletas'=>$atletas]);
    }
    public function Atletas_by_Rama()
    {
        $libre_masculino=Atletas::join('tc_categoria','tc_categoria.id','=','id_categoria')
        ->where('id_categoria','=','1')
        ->get();
       
        $libre_femenino=Atletas::join('tc_categoria','tc_categoria.id','=','id_categoria')
        ->where('id_categoria','=','2')
        ->get();
       
        $master=Atletas::join('tc_categoria','tc_categoria.id','=','id_categoria')
        ->where('id_categoria','=','3')
        ->get();
        
        $elite=Atletas::join('tc_categoria','tc_categoria.id','=','id_categoria')
        ->where('id_categoria','=','4')
        ->get();
        
        return response()->json([
            'libre_masculino'   =>  $libre_masculino,
            'libre_femenino'    =>  $libre_femenino,
            'master'            =>  $master,
            'elite'             =>  $elite
        ],200);

    }
   
}
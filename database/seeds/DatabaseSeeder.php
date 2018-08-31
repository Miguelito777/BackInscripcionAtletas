<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Competicion;
use App\Atletas;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('tc_categoria')->delete();

        $categorias = array(
            ['nombre'=>'Libre Masculino','descripcion'=>'Corredores entre 18 y 30 años'],
            ['nombre'=>'Libre Femenino','descripcion'=>'Corredoras entre 18 y 30 años'],
            ['nombre'=>'Master Masculino','descripcion'=>'Corredores mayores a 30 años'],
            ['nombre'=>'Elite','descripcion'=>'Corredores candidatos a ganar'],
           
        );
        $competiciones = array(
            ['descripcion'=>'Carrera de 21 Kilometros','estado'=>'1','anio'=>'2018','dedicatoria'=>'San Miguel'],
      );
        $atletas = array(
            ['nombres'=>'Juan Pedro','apellidos'=>'Tzul Cua','dpi'=>'331266700801','genero'=>'Masculino','telefono'=>'54657687','fecha_nacimiento'=>'1996-12-12','email'=>'juanp@gmail.com','descripcion'=>'corredor unico','id_categoria'=>'1','id_competicion'=>'1','pais'=>'GUATEMALA','direccion'=>'Calle B 2-19 Zona 1 Totonicapan'],
     );
        foreach ($categorias as $categoria)
        {
            Categoria::create($categoria);
        }
        foreach ($competiciones as $competicion)
        {
            Competicion::create($competicion);
        }
        foreach ($atletas as $atleta)
        {
            Atletas::create($atleta);
        }
    }
}

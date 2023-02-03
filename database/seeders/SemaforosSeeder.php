<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\semaforo;

class SemaforosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semaforo1=new Semaforo;
        $semaforo1->id='1';
        $semaforo1->competence ='DISEÑAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE.';
        $semaforo1->dayweek='3';
        $semaforo1->result='Aplicar políticas y mecanismos de control en el diseño del sistema de información, mediante el análisis de la vulnerabilidad de la información G13';
        $semaforo1->programs_code='228106';
        $semaforo1->save();

        $semaforo2=new Semaforo;
        $semaforo2->id='2';
        $semaforo2->competence='Implantación del software';
        $semaforo2->dayweek='2';
        $semaforo2->result='Realizar pruebas al software para verificar su funcionalidad.
        Planear actividades de implantación del software de acuerdo con las condiciones del sistema.';
        $semaforo2->programs_code='228118';
        $semaforo2->save();

        $semaforo3=new Semaforo;
        $semaforo3->id='3';
        $semaforo3->competence='APLICAR PRÁCTICAS DE PROTECCIÓN AMBIENTAL, SEGURIDAD Y SALUD EN EL TRABAJO DE ACUERDO CON LAS POLÍTICAS ORGANIZACIONALES Y LA NORMATIVIDAD VIGENTE.';
        $semaforo3->dayweek='05';
        $semaforo3->result='INTERPRETAR LOS PROBLEMAS AMBIENTALES Y DE SST TENIENDO EN CUENTA LOS PLANES Y PROGRAMAS ESTABLECIDOS POR LA ORGANIZACIÓN Y EL ENTORNO SOCIAL.';
        $semaforo3->programs_code='233104';
        $semaforo3->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\program;

class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program1=new Program;
        $program1->code='228106';
        $program1->name='ADSI (Analisis y Desarrollo de Sistemas de Informacion)';
        $program1->version='102';
        $program1->estate='en formacion';
        $program1->duration='18 meses';
        $program1->level_training='tecnologo';
        $program1->save();

        $program2=new Program;
        $program2->code='228118';
        $program2->name='ADSO (Analisis y Desarrollo de Software)';
        $program2->version='1';
        $program2->estate='en formacion';
        $program2->duration='3120 horas';
        $program2->level_training='tecnologo';
        $program2->save();

        $program3=new Program;
        $program3->code='233104';
        $program3->name='Programacion Software';
        $program3->version='1';
        $program3->estate='en formacion';
        $program3->duration='1344 horas';
        $program3->level_training='tecnico';
        $program3->save();
    }
}

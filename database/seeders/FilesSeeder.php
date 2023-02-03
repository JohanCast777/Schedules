<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\file;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file1=new File;
        $file1->nr_file='2515397';
        $file1->working='Diurna';
        $file1->quota='31';
        $file1->modality='Presencial';
        $file1->programs_code='228106';
        $file1->save();

        $file2=new File;
        $file2->nr_file='24423139';
        $file2->working='Diurna';
        $file2->quota='28';
        $file2->modality='Presencial';
        $file2->programs_code='228118';
        $file2->save();

        $file3=new File;
        $file3->nr_file='2342390';
        $file3->working='Diurna';
        $file3->quota='28';
        $file3->modality='Presencial';
        $file3->programs_code='233104';
        $file3->save();
    }
}

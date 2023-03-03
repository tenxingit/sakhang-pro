<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DerimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('derim')->insert([
        [  'DerimName'=>'Derim1(a)',
        'SqrFt'=>'700-899',
        'Delete_tab'=>'0',],

        [  'DerimName'=>'Derim1(b)',
        'SqrFt'=>'600-699',
        'Delete_tab'=>'0',],

        [  'DerimName'=>'Derim2(a)',
        'SqrFt'=>'500-599',
        'Delete_tab'=>'0',],

        [  'DerimName'=>'Derim2(b)',
        'SqrFt'=>'450-499',
        'Delete_tab'=>'0',],

        [  'DerimName'=>'Derim3',
        'SqrFt'=>'350-449',
        'Delete_tab'=>'0',],

        [  'DerimName'=>'Derim4',
        'SqrFt'=>'250-349',
        'Delete_tab'=>'0',],

        [  'DerimName'=>'Derim5',
        'SqrFt'=>'200-249',
        'Delete_tab'=>'0',],
      
    ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class AdminbodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('adminbody')->insert([

        [  'AdminBodyName'=>'Ministerial',
        'Delete_tab'=>'0',],

        [  'AdminBodyName'=>'Special Offices',
        'Delete_tab'=>'0',],

        [  'AdminBodyName'=>'Independent Bodies',
        'Delete_tab'=>'0',],

        [  'AdminBodyName'=>'Min_Sub_Offices',
        'Delete_tab'=>'0',],
      
    ]);
  
      
    }
}

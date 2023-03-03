<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HouseStaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('housingstat')->insert([
        [  'Name'=>'Transferred',
        'Delete_tab'=>'0',],

        [  'Name'=>'Exceptional Cases',
        'Delete_tab'=>'0',],

        [  'Name'=>'General Waiting List',
        'Delete_tab'=>'0',],

        [  'Name'=>'House Alloted',
        'Delete_tab'=>'0',],

        [  'Name'=>'House Released',
        'Delete_tab'=>'0',],
      
    ]);
  
    }
}

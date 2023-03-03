<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('building')->insert([

        ['BuildingName'=>'Tashi Khangsar',
        'Delete_tab'=>'0',],

          ['BuildingName'=>'Gangchen Khangsar',
        'Delete_tab'=>'0',],

          ['BuildingName'=>'Phende Khang',
        'Delete_tab'=>'0',],

          ['BuildingName'=>'Ganden Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Shheeney Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Phelgye Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Pelbar Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Thogmoen Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Legmon Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Shheedey Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Namgyal Khang',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Shugseb Gatseling',
        'Delete_tab'=>'0',],

         ['BuildingName'=>'Shering Nyiho Khang',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'Phuntsok  Khang',
        'Delete_tab'=>'0',],
        
        ['BuildingName'=>'Namsay Khang',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'Desung Leshak',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'Nangsi Leshak',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'Yidhe Khang',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'New Dungche Leshak',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'Rabten Khang',
        'Delete_tab'=>'0',],

        ['BuildingName'=>'Moenkyi Khang',
        'Delete_tab'=>'0',],
        
        ['BuildingName'=>'Dickey Khang',
        'Delete_tab'=>'0',],
        
        ['BuildingName'=>'Sunny Hostel',
        'Delete_tab'=>'0',],
        
        ['BuildingName'=>'Kashag Leshak',
        'Delete_tab'=>'0',],  

        ['BuildingName'=>'Nelekhang Leshak',
        'Delete_tab'=>'0',],
                
        ['BuildingName'=>'Songtsen Khang',
        'Delete_tab'=>'0',],
                
        ['BuildingName'=>'Delek & Dickyi Khang',
        'Delete_tab'=>'0',],
                
        ['BuildingName'=>'Kashag Guest House(Behind Health Dept',
        'Delete_tab'=>'0',],
                        
        ['BuildingName'=>'Namgyal Khang',
        'Delete_tab'=>'0',],
                        
        ['BuildingName'=>'Nyiyoe  Khang',
        'Delete_tab'=>'0',],
      
    ]);
    }
}

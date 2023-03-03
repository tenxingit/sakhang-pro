<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\AdminBody;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('departments')->insert([
        [  'DepName'=>'Religion Deptt',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Home Deptt',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Finance Deptt',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Education Deptt',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Security Deptt',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'DIIR',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Health Deptt',
        'AdminBodyID'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Kashag',
        'AdminBodyID'=>'2',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Ngemey',
        'AdminBodyID'=>'2',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Planning',
        'AdminBodyID'=>'2',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'TSJC',
        'AdminBodyID'=>'2',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Election',
        'AdminBodyID'=>'3',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'PSC',
        'AdminBodyID'=>'3',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Audit Office',
        'AdminBodyID'=>'3',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'TPIE',
        'AdminBodyID'=>'2',
        'Delete_tab'=>'0',],

        [  'DepName'=>'TPI',
        'AdminBodyID'=>'4',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'TCRC',
        'AdminBodyID'=>'4',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Narthang',
        'AdminBodyID'=>'4',
        'Delete_tab'=>'0',],
      
    ]);
    }
}

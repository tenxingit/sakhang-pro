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
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Home Deptt',
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Finance Deptt',
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Education Deptt',
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Security Deptt',
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'DIIR',
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Health Deptt',
        'Adminbody_id'=>'1',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Kashag',
        'Adminbody_id'=>'2',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'Ngemey',
        'Adminbody_id'=>'2',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Planning',
        'Adminbody_id'=>'2',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'TSJC',
        'Adminbody_id'=>'2',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Election',
        'Adminbody_id'=>'3',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'PSC',
        'Adminbody_id'=>'3',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Audit Office',
        'Adminbody_id'=>'3',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'TPIE',
        'Adminbody_id'=>'2',
        'Delete_tab'=>'0',],

        [  'DepName'=>'TPI',
        'Adminbody_id'=>'4',
        'Delete_tab'=>'0',],
        
        [  'DepName'=>'TCRC',
        'Adminbody_id'=>'4',
        'Delete_tab'=>'0',],

        [  'DepName'=>'Narthang',
        'Adminbody_id'=>'4',
        'Delete_tab'=>'0',],
      
    ]);
    }
}

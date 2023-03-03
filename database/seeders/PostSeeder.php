<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([
        [  'PostName'=>'Chief Supreme Justice Commisioner',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Supreme Justice Commisioner',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Speaker',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Kalon Tripa',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Deputy Speaker',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Kalon',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Independent Bodies Heads',
        'DerimID'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Standing Committee',
        'DerimID'=>'2',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Secretary',
        'DerimID'=>'3',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Additional Secretary',
        'DerimID'=>'4',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Joint Secretary',
        'DerimID'=>'4',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Deputy Secretary',
        'DerimID'=>'5',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Under Secretary',
        'DerimID'=>'5',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Section Officer',
        'DerimID'=>'6',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Office Suprintendent',
        'DerimID'=>'6',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Office Assistant',
        'DerimID'=>'6',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Senior Clerk',
        'DerimID'=>'7',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Junior Clerk',
        'DerimID'=>'7',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Peon',
        'DerimID'=>'7',
        'Delete_tab'=>'0',],
      
    ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Users;
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
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Supreme Justice Commisioner',
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Speaker',
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Kalon Tripa',
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Deputy Speaker',
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Kalon',
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Independent Bodies Heads',
        'Derim_id'=>'1',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Standing Committee',
        'Derim_id'=>'2',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Secretary',
        'Derim_id'=>'3',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Additional Secretary',
        'Derim_id'=>'4',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Joint Secretary',
        'Derim_id'=>'4',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Deputy Secretary',
        'Derim_id'=>'5',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Under Secretary',
        'Derim_id'=>'5',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Section Officer',
        'Derim_id'=>'6',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Office Suprintendent',
        'Derim_id'=>'6',
        'Delete_tab'=>'0',],
        
        [  'PostName'=>'Office Assistant',
        'Derim_id'=>'6',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Senior Clerk',
        'Derim_id'=>'7',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Junior Clerk',
        'Derim_id'=>'7',
        'Delete_tab'=>'0',],

        [  'PostName'=>'Peon',
        'Derim_id'=>'7',
        'Delete_tab'=>'0',],
      
    ]);
    }
}

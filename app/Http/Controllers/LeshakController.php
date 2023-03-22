<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Leshak;

class LeshakController extends Controller
{
    public function home(){
        $buildings= Building::all();
      
        return view ('leshak', compact('buildings', 'staffs'));
    }
   
    public function edit()
    {
        $staffs= Staff::class::all();
        return view ('houseallot', compact('staffs'));
    }
}
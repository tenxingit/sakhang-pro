<?php

namespace App\Http\Controllers;
use App\Models\Derim;
use Illuminate\Http\Request;

class DerimController extends Controller
{
    public function first()
    {
        $firsts=Derim::find(1)->staffs; //derim1(a)
        return view('derim1', compact('firsts'));
        
    }
     public function second()
    {
        $secounds=Derim::find(2)->staffs; //derim1(b)
        return view('derim2', compact('secounds'));
        
    }
    public function third()
    {
        $thirds=Derim::find(3)->staffs; //derim2(a)
        return view('derim3', compact('thirds'));
        
    }
      public function fourth()
    {
        $fourths=Derim::find(4)->staffs; //derim2(b)
        return view('derim4', compact('fourths'));
        
    }
     public function fifth()
    {
        $fifths=Derim::find(5)->staffs; //derim2(b)
        return view('derim5', compact('fifths'));
        
    }
     public function sixth()
    {
        $sixths=Derim::find(6)->staffs; //derim2(b)
        return view('derim6', compact('sixths'));
        
    }
     public function seventh()
    {
        $sevenths=Derim::find(7)->staffs; //derim2(b)
        return view('derim7', compact('sevenths'));
        
    }


}

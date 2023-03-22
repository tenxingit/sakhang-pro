<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{
    public function index(){
        return view('building');
    }

    public function add(Request $request)
    {
        // dd($request->all());
        $validateData=$request->validate([
            'building'=>'required',
        ]);

        $building= new Building([
            'BuildingName'=>$validateData['building'],
            'Delete_tab'=>0,
        ]);
        $building->save();
        
        return redirect()->back()->with('Building has been Added successfully');
     }
}

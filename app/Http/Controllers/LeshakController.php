<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeshakRequest;
use App\Models\Building;
use App\Models\Derim;
use App\Models\Leshak;
use Illuminate\Http\Request;

class LeshakController extends Controller
{
    public function home(){
        return view ("leshak");
    }

    public function addleshak(){
        $buildings = Building::all();
        $derims=Derim::all();
      
        return view('addleshak', compact('buildings', 'derims' ));
    }

    public function store(Request $request)
    {
    // dd($request->all());

        $request->validate([
            'building_id' => 'required|exists:buildings,id',
            'house_no' => 'required|unique:leshaks,HouseNo',
            'derim_id' => 'required|exists:derims,id',
        ],[
            'HouseNo.unique'=>'House no is already exit',
        ]);

        $building = new Leshak;
        $building->building_id = $request->input('building_id');
        $building->HouseNo = $request->input('house_no');
        $building->derim_id = $request->input('derim_id');
        $building->staff_id = $request->input('staff_id',0);
        $building->Delete_tab = $request->input('Delete_tab', 0); // assuming Delete_tab is a boolean field

        $building->save();

        return redirect()->back()->with('success', 'Leshak added successfully!');
    }

    }
   

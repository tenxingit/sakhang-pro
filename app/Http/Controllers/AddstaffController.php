<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class AddstaffController extends Controller
{
  public function add()
  {
        return view('add-staff');
  }
  public function store(Request $request)
  {

            //  dd($request->all());
       $attribute= $request->validate([
            'Appno'=>'required',
            'Appdate'=>'required|date',
            'fname'=>'required',
            'lname'=>'required',
            'post'=>'required',
            'dept'=>'required',
            'Appodate'=>'required|date',
            'status'=>'required',
            'remarks'=>'required'
        ]);
      //  dd($attribute);

        Staff::create($attribute);

        return redirect('/');
  }
}

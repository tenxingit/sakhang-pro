<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Department;
use App\Models\Post;
use App\Models\Staff;
use App\Models\Statu;
use App\Models\Derim;
use Illuminate\contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\contracts\View\viewreturn;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
        $departments= Department::all();
        return view ('add-staff', compact('posts', 'departments'));
    }

    public function home()
    {
        $firsts=Derim::find(1)->staffs; //derim1(a)
        $secounds=Derim::find(2)->staffs; //derim1(b)
        $thirds=Derim::find(3)->staffs;//derim2(a)
        $fourths=Derim::find(4)->staffs;//derim2(b)
        $fifths=Derim::find(5)->staffs;//derim3
        $sixths=Derim::find(6)->staffs;//derim4
        $sevenths=Derim::find(7)->staffs;//derim5


        return view('welcome', compact('firsts', 'secounds', 'thirds', 'fourths', 'fifths', 'sixths', 'sevenths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
  public function store(StoreStaffRequest $request)
{
   
    // dd($request->all());
    Staff::create($request->all());
   return redirect()->back()->with('success', 'Data has been stored successfully.');
   
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}

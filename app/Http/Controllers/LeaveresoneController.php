<?php

namespace App\Http\Controllers;

use App\Models\Leaveresone;
use Illuminate\Http\Request;

class LeaveresoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Leaveresone::all();
        return view('aya.leave',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employers.leave');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Leaveresone();
        $salary->name=$request->name;
         $salary->user_name =\Auth::user()->name;
        $salary->status= $request->status;
        $salary->save();
        return redirect()->route("leavereson.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leaveresone  $leaveresone
     * @return \Illuminate\Http\Response
     */
    public function show(Leaveresone $leaveresone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaveresone  $leaveresone
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaveresone $leaveresone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leaveresone  $leaveresone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leaveresone $leaveresone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaveresone  $leaveresone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaveresone $leaveresone)
    {
        //
    }
}

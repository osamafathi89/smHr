<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Addsalary;
use Illuminate\Http\Request;

class AddsalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $salaries = Addsalary::all();
       return view('aya.salaryadd',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.employers.addSalary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Addsalary();
       $salary->name=$request->name;
        $salary->user_name =Auth::user()->name;
       $salary->status= $request->status;
       $salary->save();
       return redirect()->route("addsalary.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addsalary  $addsalary
     * @return \Illuminate\Http\Response
     */
    public function show(Addsalary $addsalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addsalary  $addsalary
     * @return \Illuminate\Http\Response
     */
    public function edit(Addsalary $addsalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addsalary  $addsalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addsalary $addsalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addsalary  $addsalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addsalary $addsalary)
    {
        //
    }
}

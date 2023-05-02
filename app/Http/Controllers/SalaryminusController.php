<?php

namespace App\Http\Controllers;

use App\Models\Salaryminus;
use Illuminate\Http\Request;

class SalaryminusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Salaryminus::all();
        return view('aya.salaryminus',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employers.salaryminus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Salaryminus();
        $salary->name=$request->name;
         $salary->user_name =\Auth::user()->name;
        $salary->status= $request->status;
        $salary->save();
        return redirect()->route("salayminus.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salaryminus  $salaryminus
     * @return \Illuminate\Http\Response
     */
    public function show(Salaryminus $salaryminus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salaryminus  $salaryminus
     * @return \Illuminate\Http\Response
     */
    public function edit(Salaryminus $salaryminus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salaryminus  $salaryminus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salaryminus $salaryminus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salaryminus  $salaryminus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salaryminus $salaryminus)
    {
        //
    }
}

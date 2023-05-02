<?php

namespace App\Http\Controllers;

use App\Models\Holi;
use Illuminate\Http\Request;

class HoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Holi::all();
        return view('aya.holiday',compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employers.Holi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Holi();
        $salary->name=$request->name;
         $salary->user_name =\Auth::user()->name;
        $salary->status= $request->status;
        $salary->save();
        return redirect()->route("holi.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holi  $holi
     * @return \Illuminate\Http\Response
     */
    public function show(Holi $holi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holi  $holi
     * @return \Illuminate\Http\Response
     */
    public function edit(Holi $holi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holi  $holi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Holi $holi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holi  $holi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holi $holi)
    {
        //
    }
}

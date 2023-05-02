<?php

namespace App\Http\Controllers;

use App\Models\Formal;
use Illuminate\Http\Request;

class FormalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salaries = Formal::all();
        return view('aya.invite', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employers.formals');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new Formal();
        $salary->name = $request->name;
        $salary->user_name = \Auth::user()->name;
        $salary->date_from = $request->date_from;
        $salary->date_to = $request->date_to;
        $salary->days = $request->days;
        $salary->status = $request->status;
        $salary->save();
        return redirect()->route("formal.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formal  $formal
     * @return \Illuminate\Http\Response
     */
    public function show(Formal $formal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formal  $formal
     * @return \Illuminate\Http\Response
     */
    public function edit(Formal $formal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formal  $formal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formal $formal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formal  $formal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formal $formal)
    {
        //
    }
}

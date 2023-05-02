<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $employees = Employee::all();
       return view('admin.employers.all',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee= new Employee();
        $employee->name=$request->name;
        $employee->birth=$request->birth;
        $employee->email=$request->email;
        $employee->password=$request->password;
        $employee->grade=$request->grade;
        $employee->graduation=$request->graduation;
        $employee->married=$request->married;
        $employee->gender=$request->gender;
        $employee->marital=$request->marital;
        if($employee->save()){
            $message = "تمت أضافة البيانات بنجاح";
            return view('admin.employers.add',compact('message'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('admin.employers.edit',compact(('employee')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->name=$request->name;
        $employee->birth=$request->birth;
        $employee->email=$request->email;
        $employee->password=$request->password;
        $employee->grade=$request->grade;
        $employee->graduation=$request->graduation;
        $employee->married=$request->married;
        $employee->gender=$request->gender;
        $employee->marital=$request->marital;
        if($employee->save()){
            $message = "تمت تعديل البيانات بنجاح";
            return view('admin.employers.edit',compact('message','employee'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}

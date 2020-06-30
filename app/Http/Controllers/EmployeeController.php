<?php

namespace App\Http\Controllers;

use App\DsDivision;
use App\Employee;
use App\Http\Requests\EmployeeDataRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the accura employees.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $ds_divisions = DsDivision::all();
      //  dump($ds_divisions);
        return view('employees.create', compact('ds_divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->setAttribute('first_name', $request->input('first_name'));
        $employee->setAttribute('last_name',$request->input('last_name'));
        $employee->setAttribute('date_of_birth',$request->input('date_of_birth'));
        $employee->setAttribute('summery',$request->input('summery'));
        $employee->setAttribute('ds_division_id',$request->input('ds_division_id'));
        $employee->save();

        return redirect()->route('employee.index')->with('success','Data Created successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employee',$employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ds_divisions = DsDivision::all();
        $employee=Employee::find($id);
        return view('employees.edit', compact('ds_divisions'))->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->setAttribute('first_name', $request->input('first_name'));
        $employee->setAttribute('last_name',$request->input('last_name'));
        $employee->setAttribute('date_of_birth',$request->input('date_of_birth'));
        $employee->setAttribute('summery',$request->input('summery'));
        $employee->setAttribute('ds_division_id',$request->input('ds_division_id'));
        $employee->save();

        return redirect()->route('employee.index')->with('success','Data updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $employee =Employee::find($id);
        return view('employees.delete',compact('employee'));
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employee.index');
    }
}

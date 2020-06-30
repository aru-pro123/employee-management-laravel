@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <h2 style="text-align: center">Accura Member List</h2>
        </div>
        <div class="card">
            <div class="card-header">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 300px ;float: left">
                <a href="{{ route('employee.create') }}" class="btn btn-primary" style="float: right">Add New Member</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr bgcolor="#5f9ea" style="color: white; text-align: center">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth </th>
                    <th>DS Division</th>
                    <th>Actions</th>
                </tr>
                @foreach($employees as $employee)
                    <tr>
                        <td> {{$employee->first_name}} </td>
                        <td> {{$employee->last_name}} </td>
                        <td> {{$employee->date_of_birth}} </td>
                        <td> {{$employee->dsDivision->name}} </td>
                        <td style="text-align: center"><a href="{{ route('employee.edit',['id' => $employee->id]) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('employee.delete', ['id' => $employee->id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection

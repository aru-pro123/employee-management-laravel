@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">

            <div class="card-header">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" style="width: 300px ;float: left">
                <a href="{{ route('employee.create') }}" class="btn btn-primary" style="float: right">Add New Member</a>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr bgcolor="#5f9ea0">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth </th>
                    <th>DS Division</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($employees as $employee)
                    <tr>
                        <td> {{$employee->first_name}} </td>
                        <td> {{$employee->last_name}} </td>
                        <td> {{$employee->date_of_birth}} </td>
                        <td> {{$employee->ds_division_id}} </td>
                        <td><a href="{{ route('$employee.edit',['id' => $employee->id]) }}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('$employee.delete', ['id' => $employee->id]) }}" class="btn btn-danger">Delete</a></td>
                    </tr>

                @endforeach
                </thead>
            </table>
        </div>
    </div>


@endsection

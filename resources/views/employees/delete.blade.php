@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Do you really want delete <strong>{{$employee->name}}</strong> from database?
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('employee.destroy',['id'=>$employee->id]) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('employee.index') }}"><button class="btn btn-outline-secondary btn-close">Cancel</button></a>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

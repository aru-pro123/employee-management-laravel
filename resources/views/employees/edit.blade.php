@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Edit <strong>{{ $student->name }}</strong>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('student.update', ['student' => $student->id]) }}">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="first">First Name</label>
                                <input type="text" class="form-control" id="first" placeholder="Enter First name" name="name" value="{{$employee->first_name}}">
                                <small class="text-danger">{{ $errors->first('first_name') }}</small>
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last">Last Name</label>
                                <input type="text" class="form-control" id="last" placeholder="Enter Last name" name="name" value="{{$employee->last_name}}">
                                <small class="text-danger">{{ $errors->first('last_name') }}</small>
                            </div>

                            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                <label for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" placeholder="Enter member DOB" name="dob" value="{{$employee->date_of_birth}}">
                                <small class="text-danger">{{ $errors->first('date_of_birth') }}</small>
                            </div>

                            <div class="form-group{{ $errors->has('ds_division') ? ' has-error' : '' }}">
                                <label for="ds">DS Division</label>
                                <select class="form-control" value="{{$employee->ds_division_id}}">
                                    @foreach($ds_divisions as $ds)
                                        <option>
                                            {{$ds->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Summery</label>
                                <textarea class="form-control" value="{{$employee->summery}}">

                                </textarea>

                            </div>

                            <button type="submit" class="btn btn-info">Update</button>

                        </form>

                        <br><a href="{{ route('student.index') }}"><button class="btn btn-default btn-close">Cancel</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

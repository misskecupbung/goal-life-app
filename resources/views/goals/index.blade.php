@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goals List</div>
                    <div class="panel-body">
                        <a href="{{ url('goals/create') }}" class="btn btn-primary">Add Goals</a>

                        <br>
                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Is Done</th>
                                    <th>Action</th>
                                </tr>

                                @if(! count($goals))
                                    <tr>
                                        <td colspan="3">No Goals</td>
                                    </tr>
                                @endif
                                @foreach($goals as $goal)
                                    <tr>
                                        <td>{{ $goal->name }}</td>
                                        <td>{{ $goal->is_done ? 'Done' : 'Not Done'}}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ url('goals/'.$goal->id.'/edit') }}">Edit</a>
                                            <a class="btn btn-danger" href="{{ url('goals/'.$goal->id.'/delete') }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

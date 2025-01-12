@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Teachers Page</div>
        <div class="card-body">

            <form action="{{ url('teachers') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Course</label></br>
                <input type="text" name="course" id="course" class="form-control"></br>
                <label>Syllabus</label></br>
                <input type="text" name="syllabus" id="syllabus" class="form-control"><br>
                <input type="submit" value="Save" class="btn btn-success"><br>
            </form>
        </div>
    </div>

@stop

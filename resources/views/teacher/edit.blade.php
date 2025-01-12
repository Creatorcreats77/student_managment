@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">

                <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{ $teachers->id }}">
                    <label>Name</label><br>
                    <input type="text" name="name" id="name" value="{{ $teachers->name }}" class="form-control"><br>
                    <label>Course</label><br>
                    <input type="text" name="course" id="course" value="{{ $teachers->course }}" class="form-control"><br>
                    <label>Syllabus</label><br>
                    <input type="text" name="syllabus" id="syllabus" value="{{ $teachers->syllabus }}" class="form-control"><br>
                    <input type="submit" value="update" class="btn btn-success"><br>
                </form>

            </div>
        </div>
    </div>

@stop

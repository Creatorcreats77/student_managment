@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">

                <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{ $enrollments->id }}">
                    <label>Enroll number</label><br>
                    <input type="text" name="enroll_no" id="enroll_no" value="{{ $enrollments->enroll_no }}" class="form-control"><br>

                    <label>Batches</label><br>
                    <select name="batch_id" id="batch_id" class="form-control">
                        @foreach($batches as $id =>$name)
                            <option value="{{ $id  }}">
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>

                    <label>Students</label><br>
                    <select name="student_id" id="student_id" class="form-control">
                        @foreach($students as $id =>$name)
                            <option value="{{ $id  }}">
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>

                    <label>Join Date</label><br>
                    <input type="text" name="join_date" id="join_date" value="{{ $enrollments->join_date }}" class="form-control"><br>

                    <label>Fee</label><br>
                    <input type="text" name="fee" id="fee" value="{{ $enrollments->fee }}" class="form-control"><br>

                    <input type="submit" value="update" class="btn btn-success"><br>
                </form>

            </div>
        </div>
    </div>

@stop
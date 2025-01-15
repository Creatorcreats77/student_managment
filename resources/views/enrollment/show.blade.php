@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollments Page</div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Enroll number: {{ $enrollments->enroll_no }}</h5>
                <p class="card-text">Batch: {{ $enrollments->batch_id }}</p>
                <p class="card-text">Student: {{ $enrollments->student_id }}</p>
                <p class="card-text">Join_date: {{ $enrollments->join_date }}</p>
                <p class="card-text">Fee: {{ $enrollments->fee }}</p>
            </div>
            </hr>
        </div>
    </div>
@endsection
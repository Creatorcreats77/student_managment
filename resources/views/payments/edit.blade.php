@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-body">

                <form action="{{ url('payments/' .$payments->id) }}" method="post">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{ $payments->id }}">

                    <label>Enrollment No</label><br>
                    <input type="text" name="enrollment_id" id="enrollment_id" value="{{ $payments->enrollment->enroll_no }}" class="form-control"><br>
                    <select name="enrollment_id" id="enrollment_id" class="form-control">
                        @foreach($enrollments as $id =>$enroll_no)
                            <option value="{{ $id  }}">
                                {{ $enroll_no }}
                            </option>
                        @endforeach
                    </select>

                    <label>Paid date</label><br>
                    <input type="text" name="paid_date" id="paid_date" value="{{ $payments->paid_date }}" class="form-control"><br>
                    <label>Amount</label><br>
                    <input type="text" name="amount" id="amount" value="{{ $payments->amount }}" class="form-control"><br>
                    <input type="submit" value="update" class="btn btn-success"><br>
                </form>

            </div>
        </div>
    </div>

@stop
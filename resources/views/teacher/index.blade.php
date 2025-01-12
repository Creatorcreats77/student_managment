@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Teacher Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('teachers/create') }}" class="btn btn-success btn-sm" title="Add New Teacher">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Syllabus</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->course }}</td>
                            <td>{{ $item->syllabus }}</td>

                            <td>
                                <a href="{{ ('/teachers/' . $item->id) }}" title="View Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                <a href="{{ ('/teachers/' . $item->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>

                                <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
{{--                                    'Confirm delete?'--}}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

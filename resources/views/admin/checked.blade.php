@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>UnChecked Assignment</h2>
                <br>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>Assignment-course</th>
            <th>Assignment-subject</th>
            <th>Assignment-Title</th>
            <th>Assignment-Description</th>
            <th>Assignment-Marks</th>
            <th>Assignment-Last Day Of Submission</th>
            <th>Assignment-image</th>
            <th>Assignment-Status</th>
            <th>Action</th>

        </thead>

        @foreach ($assignments as $assignment)
            <tbody>
                <tr>
                    <td>{{ $assignment->course->course ?? 'unknown' }}({{ $assignment->course->branch ?? 'unknown' }})
                    </td>
                    <td>{{ $assignment->subject->subjectfullname ?? 'unknown' }}({{ $assignment->subject->subjectshortname ?? 'unknown' }})
                    </td>
                    <td>{{ $assignment->title ?? 'unknown' }}</td>
                    <td>{{ $assignment->description ?? 'unknown' }}</td>
                    <td>{{ $assignment->marks ?? 'unknown' }}</td>
                    <td>{{ $assignment->submission ?? 'unknown' }}</td>
                    <td><embed src="{{ Storage::url($assignment->image) }}" width="50px" height="50px"></td>
                    <td>{{ $assignment->status ?? 'unknown' }}</td>
                    <td>
                        <a href="{{ route('show-answeradmin', $assignment->id) }}" class="btn btn-info">View</a>
                    </td>
                </tr>
        @endforeach
        </tbody>

    </table>
@endsection

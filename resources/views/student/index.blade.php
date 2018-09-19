@extends('frmMain')
@section('title','list date')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>gender</th>
            <th>datebirst</th>
            <th>place</th>
            <th>card</th>
            <th>startdate</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->datebirst  }}</td>
            <td>{{ $row->place }}</td>
            <td>{{ $row->card }}</td>
            <td>{{ $row->startdate }}</td>
            <td>
                <a href='{{url("student/edit/{$row->id}")}}'>Edit</a> |
                <a href='{{url("student/delete/{$row->id}")}}'>Delete</a>
            {{--<button type="button" class="btn btn-primary btn-sm">View</button>--}}
            {{--<button type="button" class="btn btn-success btn-sm">Edit</button>--}}
            {{--<button type="button" class="btn btn-danger btn-sm">Delete</button>--}}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {!! $rows->links() !!}
@endsection

@section('js')

@endsection
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
            <th>subject</th>
            <th>description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->subject }}</td>
                <td>{{ $row->description }}</td>
                <td>
                    <a href='{{url("subjects/edit/{$row->id}")}}'>Edit</a> |
                    <a href='{{url("subjects/delete/{$row->id}")}}'>Delete</a>
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
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
            <th>fullname</th>
            <th>email</th>
            <th>password</th>
            <th>gender</th>
            <th>phone</th>
            <th>datebirst</th>
            <th>place</th>
            <th>business</th>
            <th>payment</th>
            <th>codecompany</th>
            <th>level</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fullname }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->password  }}</td>
                <td>{{ $row->gender }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->datebirst }}</td>
                <td>{{ $row->place  }}</td>
                <td>{{ $row->business }}</td>
                <td>{{ $row->payment }}</td>
                <td>{{ $row->codecompany }}</td>
                <td>{{ $row->level }}</td>
                <td>
                    <a href='{{url("useraccount/edit/{$row->id}")}}'>Edit</a> |
                    <a href='{{url("useraccount/delete/{$row->id}")}}'>Delete</a>
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
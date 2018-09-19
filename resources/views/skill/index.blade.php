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
            <th>subjectid</th>
            <th>skill</th>
            <th>description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
       @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->subject_id}}</td>
            <td>{{$row->skill}}</td>
            <td>{{$row->description}}</td>
            <td>
                <a href='{{url("skill/edit/{$row->id}")}}'>Edit</a> |
                <a href='{{url("skill/delete/{$row->id}")}}'>Delete</a>
            </td>
        </tr>
       @endforeach
        </tbody>
    </table>
    {!! $rows->links()!!}
@endsection

@section('js')

@endsection
@extends('frmMain')
@section('title','edit')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <!-- form start -->
    <form role="form" action="{{url('student/update')}}" method="post">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="hidden" class="form-control" value="{{$row->id}}" name="id" id="id">
                <input type="text" class="form-control" value="{{$row->name}}" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                <select class="form-control" value="{{$row->gender}}" name="gender" id="gender">
                    <option @if($row->gender=='M') selected  @endif value="M">M</option>
                    <option  @if($row->gender=='F') selected  @endif value="F">F</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Date of Birst</label>
                <input type="text" class="form-control" value="{{$row->datebirst}}" name="datebirst" id="datebirst">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Place</label>
                <input type="text" class="form-control" value="{{$row->place}}" name="place" id="place">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Card</label>
                <input type="text" class="form-control" value="{{$row->card}}" name="card" id="card">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Start Date</label>
                <input type="text" class="form-control" value="{{$row->startdate}}" name="startdate" id="startdate">
            </div>

            {{--<div class="form-group">--}}
            {{--<label for="exampleInputFile">File input</label>--}}
            {{--<input type="file" id="exampleInputFile">--}}
            {{--<p class="help-block">Example block-level help text here.</p>--}}
            {{--</div>--}}
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- end form start -->
@endsection

@section('js')

@endsection
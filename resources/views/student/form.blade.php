@extends('frmMain')
@section('title','form')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
<!-- form start -->
<form role="form" action="{{url('student/insert')}}" method="post">
    {!! csrf_field() !!}
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option>M</option>
                    <option>F</option>
                </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date of Birst</label>
            <input type="text" class="form-control" name="datebirst" id="datebirst">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Place</label>
            <input type="text" class="form-control" name="place" id="place">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Card</label>
            <input type="text" class="form-control" name="card" id="card">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Start Date</label>
            <input type="text" class="form-control" name="startdate" id="startdate">
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
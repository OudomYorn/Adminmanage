@extends('frmMain')
@section('title','form')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <!-- form start -->
    <form role="form" action="{{url('subjects/update')}}" method="post">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="hidden" class="form-control" value="{{$rows->id}}" name="id" id="id">
                <input type="text" class="form-control" value="{{$rows->subject}}" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" value="{{$rows->description}}" name="description" id="description">
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <!-- end form start -->
@endsection

@section('js')

@endsection
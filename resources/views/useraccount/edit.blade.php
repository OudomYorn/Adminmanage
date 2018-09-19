@extends('frmMain')
@section('title','form')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <!-- form start -->
    <form role="form" action="{{url('useraccount/update')}}" method="post">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="hidden" class="form-control" value="{{$row->id}}" name="id" id="id">
                <input type="text" class="form-control" value="{{$row->fullname}}" name="fullname" id="fullname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" value="{{$row->email}}" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" value="{{$row->password}}" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option @if($row->gender == 'M') selected @endif value="M">M</option>
                    <option @if($row->gender == 'F') selected @endif value="F">F</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" value="{{$row->phone}}" name="phone" id="phone">
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
                <label for="exampleInputPassword1">Business</label>
                <input type="text" class="form-control" value="{{$row->business}}" name="business" id="business">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Payment</label>
                <input type="number" class="form-control" value="{{$row->payment}}" name="payment" id="payment">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Code Company</label>
                <input type="text" class="form-control" value="{{$row->codecompany}}" name="codecompany" id="codecompany">
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
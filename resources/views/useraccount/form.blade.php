@extends('frmMain')
@section('title','form')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <!-- form start -->
    <form role="form" action="{{url('useraccount/insert')}}" method="post">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" name="fullname" id="fullname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option>M</option>
                    <option>F</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
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
                <label for="exampleInputPassword1">Business</label>
                <input type="text" class="form-control" name="business" id="business">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Payment</label>
                <input type="number" class="form-control" name="payment" id="payment">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Code Company</label>
                <input type="text" class="form-control" name="codecompany" id="codecompany">
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
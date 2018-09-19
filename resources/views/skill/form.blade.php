@extends('frmMain')
@section('title','form')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <!-- form start -->
    <form role="form" action="{{url('skill/insert')}}" method="post">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputPassword1">Subject</label>
                <select class="form-control" name="subject_id" id="subject_id">
                    <?php $rows = \App\StudentSubject::all();?>
                    @foreach($rows as $row)
                    <option value="{{$row->id}}">{{$row->subject}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Skill</label>
                <input type="text" class="form-control" name="skill" id="subject">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" name="description" id="description">
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
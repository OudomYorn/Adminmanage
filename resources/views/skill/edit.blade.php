@extends('frmMain')
@section('title','edit')

@section('breadcrumb')
    {{--<h1>Page Main User</h1>--}}
@endsection

@section('content')
    <!-- form start -->
    <form role="form" action="{{url('skill/update')}}" method="post">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <input type="hidden" class="form-control" value="{{$row->id}}" name="id" id="id">
                <label for="exampleInputPassword1">Subject</label>
                <select class="form-control" name="subject_id" id="subject_id">
                    <?php $subs = \App\StudentSubject::all();?>
                    @foreach($subs as $sub)
                         <option @if($row->subject_id == $sub->id) selected  @endif value="{{$sub->id}}">
                             {{$sub->subject}}
                         </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Skill</label>
                <input type="text" class="form-control" value="{{$row->skill}}" name="skill" id="skill">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" class="form-control" value="{{$row->description}}" name="description" id="description">
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
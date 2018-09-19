<?php

namespace App\Http\Controllers;

use App\StudentSubject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    //
    public function index(){
        $rows = StudentSubject::paginate(5);
        return view('subjects.index',['rows'=>$rows]);
    }
    public function form(){
        return view('subjects.form');
    }
    public function insert(Request $request){
        $m = new StudentSubject();
        $m->subject = $request->subject;
        $m->description = $request->description;
        $m->save();
        return redirect('subjects/index');
    }
    public function edit($id){
        $m = StudentSubject::find($id);
        return view('subjects.edit',['rows'=>$m]);
    }
    public function update(Request $request){
        $m = StudentSubject::find($request->id);
        $m->subject = $request->subject;
        $m->description = $request->description;
        $m->save();
        return redirect('subjects/index');
    }
    public function delete($id){
        $m = StudentSubject::find($id);
        if ($m != null){
            $m->delete();
            return redirect()->back();
        }
   }
}

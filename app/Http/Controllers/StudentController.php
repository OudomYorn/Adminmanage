<?php

namespace App\Http\Controllers;

use App\Studen;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $rows = Studen::paginate(5);//call model Studen
        return view('student.index',['rows'=>$rows]); //return to view form
    }//list data
    public function form(){
        return view('student.form');
    }//form insert
    public function insert(Request $request){
        $m= new Studen();
        $m->name = $request->name;
        $m->gender = $request->gender;
        $m->datebirst = $request->datebirst;
        $m->place = $request->place;
        $m->card = $request->card;
        $m->startdate = $request->startdate;
        $m->save();
        return redirect('student/index');
    }//insert value
    public function edit($id){
        $m = Studen::find($id);
        return view('student.edit',['row'=>$m]);
    }//send to value to form edit
    public function update(Request $request){
        $m= Studen::find($request->id);
        $m->name = $request->name;
        $m->gender = $request->gender;
        $m->datebirst = $request->datebirst;
        $m->place = $request->place;
        $m->card = $request->card;
        $m->startdate = $request->startdate;
        $m->save();
        return redirect('student/index');
    }//update value
    public function delete($id){
        $m = Studen::find($id);
        if ($m != null){
            $m->delete();
            return redirect()->back();
        }
    }//delete value
}

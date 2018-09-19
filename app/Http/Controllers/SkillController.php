<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //

    public function index(){
        $rows = Skill::paginate(5);
        return view('skill.index',['rows'=>$rows]);
    }
    public function form(){
        return view('skill.form');
    }
    public function insert(Request $request){
        $m = new Skill();
        $m->subject_id = $request->subject_id;
        $m->skill = $request->skill;
        $m->description = $request->description;
        $m->save();
        return redirect('skill/index');
    }
    public function edit($id){
        $m = Skill::find($id);
        return view('skill.edit',['row'=>$m]);
    }
    public function update(Request $request){
        $m = Skill::find($request->id);
        $m->subject_id = $request->subject_id;
        $m->skill = $request->skill;
        $m->description = $request->description;
        $m->save();
        return redirect('skill/index');
    }
    public function delete($id){
        $m = Skill::find($id);
        if ($m != null){
            $m->delete();
            return redirect()->back();
        }
    }
}

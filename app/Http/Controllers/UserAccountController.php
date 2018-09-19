<?php

namespace App\Http\Controllers;

use App\UserAccount;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class UserAccountController extends Controller
{
    //
    public function index(){
        $rows = UserAccount::paginate(5);
        return view('useraccount.index',['rows'=>$rows]);
    }
    public function form(){
        return view('useraccount.form');
    }
    public function insert(Request $request){
        $m = new UserAccount();
        $m->fullname = $request->fullname;
        $m->email = $request->email;
        $m->password = $request->password;
        $m->gender = $request->gender;
        $m->phone = $request->phone;
        $m->datebirst = $request->datebirst;
        $m->place = $request->place;
        $m->business = $request->business;
        $m->payment = $request->payment;
        $m->codecompany = $request->codecompany;
        $m->save();
        return redirect('useraccount/index');
    }
    public function edit($id){
        $m = UserAccount::find($id);
        return view('useraccount.edit',['row'=>$m]);
    }
    public function update(Request $request){
        $m = UserAccount::find($request->id);
        $m->fullname = $request->fullname;
        $m->email = $request->email;
        $m->password = $request->password;
        $m->gender = $request->gender;
        $m->phone = $request->phone;
        $m->datebirst = $request->datebirst;
        $m->place = $request->place;
        $m->business = $request->business;
        $m->payment = $request->payment;
        $m->codecompany = $request->codecompany;
        $m->save();
        return redirect('useraccount/index');
    }
    public function delete($id){
        $m = UserAccount::find($id);
        if ($m != null){
            $m->delete();
            return redirect()->back();
        }
    }
}

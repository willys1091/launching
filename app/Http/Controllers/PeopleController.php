<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\users;
use App\Models\company;

class PeopleController extends Controller{
    use \App\Traits\GeneralTrait;

    public function index(){
        $data['title'] = "People | Siapfulin";
        $data['subtitle'] = "Manage People";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add People', 'url' => 'people/create', 'icon' => 'fas fa-plus');
        $data['user'] = Session('type') == 'admin' ? users::all() : users::where('company_id', Session('companyid'))->get();
        return view('people.index', $data);
    }

    public function create(){
        $data['title'] = "People Add";
        $data['action'] = "add";
        $data['company'] = company::all();
        return view('people.action', $data);
    }

    public function store(Request $request){
        $user = new users;
        $user->email = $request->email;
        $user->password = sha1($request->password);
        $user->name = $request->name;
        $user->role_id = $request->role;
        $user->company_id = $request->company;
        $request->admin<>'1'?$user->expired_date = date("Y-m-d H:i:s", strtotime($request->expired_date)):'';
        $request->admin<>'1'?$user->status = $request->status=='1'?"full":'trial':'';
        $user->type = $request->admin=='1'?'admin':'user';
        $user->created_at = date("Y-m-d H:i:s");
        $user->save();
        $this->log_system('User','Added',$user->id);
        session::flash('error','success');
        session::flash('message','Add User Successfull');
        return redirect('people');
    }

    public function show(Request $request){
        $user = users::findorfail($request->id);
        $user->active = $request->active == '1' ? '0' : '1';
        $user->save();
        $this->log_system('login', 'Admin Logged In', Session::get('id'));
    }

    public function edit($id){
        $data['title'] = "People Edit";
        $data['action'] = "edit";
        $data['company'] = company::all();
        $data['user'] = users::findorfail($id);
        return view('people.action', $data);
    }

    public function update(Request $request, $id){
        $user = users::findorfail($id);
        $user->email = $request->email;
        $request->password<>''?$user->password = sha1($request->password):'';
        $user->name = $request->name;
        $user->role_id = $request->role;
        $user->company_id = $request->admin=='1'?'1':$request->company;
        $request->admin<>'1'?$user->expired_date = date("Y-m-d H:i:s", strtotime($request->expired_date)):'';
        $request->admin<>'1'?$user->status = $request->status=='1'?"full":'trial':'';
        $user->type = $request->admin=='1'?'admin':'user';
        $user->updated_at = date("Y-m-d H:i:s");
        $user->save();
        $this->log_system('User','Edited',$id);
        session::flash('error','success');
        session::flash('message','Edit User Successfull');
        return redirect('people');
    }

    public function detail($id){
        $data['title'] = "People Detail | Siapfulin";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Edit People', 'url' => 'people/'.$id.'/edit', 'icon' => 'fas fa-edit');
        $data['user'] = users::findorfail($id);
        return view('people.detail', $data);
    }
}

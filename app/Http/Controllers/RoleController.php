<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\role;

class RoleController extends Controller{
    public function index(){
        $data['title'] = "Role | Siapfulin";
        $data['subtitle'] = "List of master Role";
        $data['contentHeader'] = "btn";
        $data['btn'] = array('title' => 'Add Role', 'url' => 'role/create', 'icon' => 'fas fa-plus');
        $data['role'] = role::all();
        return view('role.index',$data);
    }

    public function create(){
        $data['title'] = "Role | Airvels";
        $data['action'] = "add";
        $data['contentHeader']= "bc";
        $bc[]= array('title'=> 'Role','url'=>'role','active'=>'0');
        $bc[]= array('title'=> 'Role Add','url'=>'','active'=>'1');
        $data['bc'] = $bc;
        return view('role.action',$data);
    }

    public function store(Request $request){
        $role = new role;
        $role->name = $request->name;
        $role->type = $request->type;
        $role->perms = serialize($request->perms);
        $role->save();
        session::flash('error','success');
        session::flash('message','Add Role Successfull');
        return redirect("role");
    }

    public function show($id){
        //
    }

    public function edit($id){
        $data['title'] = "Role | Airvels";
        $data['action'] = "edit";
        $role = Role::findorfail($id);
        $data['role'] = $role;
        $data['contentHeader']= "bc";
        $bc[]= array('title'=> 'Role','url'=>'role','active'=>'0');
        $bc[]= array('title'=> 'Role Edit','url'=>'','active'=>'1');
        $bc[]= array('title'=> $role->name,'url'=>'','active'=>'1');
        $data['bc'] = $bc;
        return view('role.action',$data);
    }

    public function update(Request $request, $id){
        $role = role::findorfail($id);
        $role->name = $request->name;
        $role->type = $request->type;
        $role->perms = serialize($request->perms);
        $role->save();
        session::flash('error','success');
        session::flash('message','Add Role Successfull');
        return redirect("role");
    }

    public function destroy($id){
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\vipname;

class VipnameController extends Controller{
    public function index(){
        $data['title'] = "VIP Name | Launching";
        $data['subtitle'] = "List of VIP Name";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add VIP Name', 'url' => 'vipname/create', 'icon' => 'fas fa-plus');
        $data['vipname'] = vipname::all();
        return view('bank.index',$data);
    }

 
    public function create(){
        $data['title'] = "VIP Name | Launching";
        $data['action'] = "add";
        return view('vipname.action',$data); 
    }

    public function store(Request $request){
        // $data = new vipcategory;
        // $data->name = $request->;
        // $data->max = $request->;
        // $data->lastno = $request->;
        // $data->order = $request->;
        // $data->save();
        // session::flash('error','success');
        // session::flash('message','Add Vip Name Successfull');
        // return redirect('vipname');
    }

    public function show($id){
        //
    }

    public function edit($id){
        $data['title'] = "VIP Name | Launching";
        $data['action'] = "edit";
        $data['data'] = vipname::findorfail($id);
        return view('vipname.action',$data);
    }

    public function update(Request $request, $id){
        // $data = vipname::findorfail($id);
        // $data->name = $request->;
        // $data->max = $request->;
        // $data->lastno = $request->;
        // $data->order = $request->;
        // $data->save();
        // session::flash('error','success');
        // session::flash('message','Add Vip Name Successfull');
        // return redirect('vipname');
    }

    public function destroy($id){
        //
    }
}

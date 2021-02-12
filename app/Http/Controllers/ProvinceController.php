<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\province;

class ProvinceController extends Controller{
    public function index(){
        $data['title'] = "Province | Launching";
        $data['subtitle'] = "List of Province";
        if(Session('type')=='admin'){
            $data['contentHeader'] = "mdl";
            $data['btn'] = array('title' => 'Add Province', 'url' => 'province/create', 'icon' => 'fas fa-plus');
        }else{
            $data['contentHeader']= "bc";
            $bc[]= array('title'=> 'Province','url'=>'','active'=>'1');
        }
        $data['province'] = province::all();
        return view('province.index',$data);
    }

 
    public function create(){
        $data['title'] = "Province | Launching";
        $data['action'] = "add";
        return view('province.action',$data); 
    }

    public function store(Request $request){
        $data = new province;
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Add Province Successfull');
        return redirect('province');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Province | Launching";
        $data['action'] = "edit";
        $data['data'] = province::findorfail($id);
        return view('province.action',$data); 
    }

    public function update(Request $request, $id){
        $data = province::findorfail($id);
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Edit Province Successfull');
        return redirect('province');
    }

    public function destroy($id){
    }
}

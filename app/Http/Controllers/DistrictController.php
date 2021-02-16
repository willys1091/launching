<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\district;

class DistrictController extends Controller{
    public function index(){
        $data['title'] = "District | Launching";
        $data['subtitle'] = "List of District";
        if(Session('type')=='admin'){
            $data['contentHeader'] = "mdl";
            $data['btn'] = array('title' => 'Add District', 'url' => 'district/create', 'icon' => 'fas fa-plus');
            
        }else{
            $data['contentHeader']= "bc";
            $bc[]= array('title'=> 'District','url'=>'','active'=>'1');
        }
        $data['district'] = district::all();
        return view('district.index',$data);
    }

 
    public function create(){
        $data['title'] = "District | Launching";
        $data['action'] = "add";
        return view('district.action',$data); 
    }

    public function store(Request $request){
        $data = new district;
        $data->city_id = $request->cityid;
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Add District Successfull');
        return redirect('district');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "District | Launching";
        $data['action'] = "edit";
        $data['data']  = district::findorfail($id);
        return view('district.action',$data); 
    }

    public function update(Request $request, $id){
        $data = district::findorfail($id);
        $data->city_id = $request->cityid;
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Edit District Successfull');
        return redirect('district');
    }

    public function destroy($id){
    }
}

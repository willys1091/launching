<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\province;
use App\Models\city;

class CityController extends Controller{
    public function index(){
        $data['title'] = "City | Launching";
        $data['subtitle'] = "List of City";
        if(Session('type')=='admin'){
            $data['contentHeader'] = "mdl";
            $data['btn'] = array('title' => 'Add City', 'url' => 'city/create', 'icon' => 'fas fa-plus');
        }else{
            $data['contentHeader']= "bc";
            $bc[]= array('title'=> 'City','url'=>'','active'=>'1');
        }
        $data['city'] = city::all();
        return view('city.index',$data);
    }

 
    public function create(){
        $data['title'] = "City | Launching";
        $data['action'] = "add";
        $data['province'] = province::all();
        return view('city.action',$data); 
    }

    public function store(Request $request){
        $data = new city;
        $data->province_id = $request->province;
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Add City Successfull');
        return redirect('city');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "City | Launching";
        $data['action'] = "edit";
        $data['province'] = province::all();
        $data['data'] = city::findorfail($id);
        return view('city.action',$data); 
    }

    public function update(Request $request, $id){
        $data = city::findorfail($id);
        $data->province_id = $request->province;
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Edit City Successfull');
        return redirect('city');
    }

    public function destroy($id){
    }
}

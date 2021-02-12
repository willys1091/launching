<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\district;

class DistrictController extends Controller{
    public function index(){
        $data['title'] = "District | Launching";
        $data['subtitle'] = "List of District";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add District', 'url' => 'district/create', 'icon' => 'fas fa-plus');
        $data['district'] = district::all();
        return view('district.index',$data);
    }

 
    public function create(){
        //
    }

    public function store(Request $request){
        //
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
}

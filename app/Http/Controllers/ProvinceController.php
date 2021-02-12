<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\province;

class ProvinceController extends Controller{
    public function index(){
        $data['title'] = "Province | Launching";
        $data['subtitle'] = "List of Province";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Province', 'url' => 'province/create', 'icon' => 'fas fa-plus');
        $data['province'] = province::all();
        return view('province.index',$data);
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

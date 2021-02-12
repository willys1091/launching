<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

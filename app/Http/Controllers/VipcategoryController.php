<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vipcategory;

class VipcategoryController extends Controller{
    public function index(){
        $data['title'] = "VIP Category | Launching";
        $data['subtitle'] = "List of VIP Category";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add VIP Category', 'url' => 'vipcategory/create', 'icon' => 'fas fa-plus');
        $data['vipcategory'] = vipcategory::all();
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

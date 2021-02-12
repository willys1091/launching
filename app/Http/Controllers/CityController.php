<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class CityController extends Controller{
    public function index(){
        $data['title'] = "City | Launching";
        $data['subtitle'] = "List of City";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add City', 'url' => 'city/create', 'icon' => 'fas fa-plus');
        $data['city'] = city::all();
        return view('city.index',$data);
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

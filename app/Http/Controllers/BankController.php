<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bank;

class BankController extends Controller{
    public function index(){
        $data['title'] = "Bank | Launching";
        $data['subtitle'] = "List of Bank";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Bank', 'url' => 'bank/create', 'icon' => 'fas fa-plus');
        $data['bank'] = bank::all();
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bank;

class BankController extends Controller{
    public function index(){
        $data['title'] = "Bank | Launching";
        $data['subtitle'] = "List of Bank";
        if(Session('type')=='admin'){
            $data['contentHeader'] = "mdl";
            $data['btn'] = array('title' => 'Add Bank', 'url' => 'bank/create', 'icon' => 'fas fa-plus');
        }else{
            $data['contentHeader']= "bc";
            $bc[]= array('title'=> 'Bank','url'=>'','active'=>'1');
        }
       
        $data['bank'] = bank::all();
        return view('bank.index',$data);
    }

 
    public function create(){
        $data['title'] = "Bank | Launching";
        $data['action'] = "add";
        return view('bank.action',$data); 
    }

    public function store(Request $request){
        $data = new bank;
        $data->name = $request->name;
        $data->companyname = $request->companyname;
        $data->code = $request->code;
        $data->save();
        session::flash('error','success');
        session::flash('message','Add Bank Successfull');
        return redirect('bank');
    }

    public function show($id){
    }

    public function edit($id){
        $data['title'] = "Bank | Launching";
        $data['action'] = "edit";
        $data['data'] = bank::findorfail($id);
        return view('bank.action',$data); 
    }

    public function update(Request $request, $id){
        $data = bank::findorfail($id);
        $data->name = $request->name;
        $data->companyname = $request->companyname;
        $data->code = $request->code;
        $data->save();
        session::flash('error','success');
        session::flash('message','Edit Bank Successfull');
        return redirect('bank');
    }

    public function destroy($id){
    }
}

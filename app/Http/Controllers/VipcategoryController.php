<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\vipcategory;
use App\Models\event;

class VipcategoryController extends Controller{
    public function index(){
        $data['title'] = "VIP Category | Launching";
        $data['subtitle'] = "List of VIP Category";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add VIP Category', 'url' => 'vipcategory/create', 'icon' => 'fas fa-plus');
        $data['vipcategory'] = vipcategory::all();
        return view('vipcategory.index',$data);
    }

 
    public function create(){
        $data['title'] = "VIP Category | Launching";
        $data['action'] = "add";
        $data['event'] = event::where('active',1)->get();
        return view('vipcategory.action',$data); 
    }

    public function store(Request $request){
        // $data = new vipcategory;
        // $data->name = $request->;
        // $data->event_id = $request->;
        // $data->refundable = $request->;
        // $data->qty = $request->;
        // $data->nupfee = $request->;
        // $data->lastno = $request->;
        // $data->desc = $request->;
        // $data->color = $request->;
        // $data->save();
        // session::flash('error','success');
        // session::flash('message','Add Vip Category Successfull');
        // return redirect('vipcategory');
    }

    public function show($id){
        
    }

    public function edit($id){
        $data['title'] = "VIP Category | Launching";
        $data['action'] = "edit";
        $data['data'] = vipcategory::findorfail($id);
        return view('vipcategory.action',$data); 
    }

    public function update(Request $request, $id){
        // $data = vipcategory::findorfail($id);
        // $data->name = $request->;
        // $data->event_id = $request->;
        // $data->refundable = $request->;
        // $data->qty = $request->;
        // $data->nupfee = $request->;
        // $data->lastno = $request->;
        // $data->desc = $request->;
        // $data->color = $request->;
        // $data->save();
        // session::flash('error','success');
        // session::flash('message','Add Vip Category Successfull');
        // return redirect('vipcategory');
    }

    public function destroy($id){

    }
}

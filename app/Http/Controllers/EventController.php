<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\event;

class EventController extends Controller{
    public function index(){
        $data['title'] = "Event | Launching";
        $data['subtitle'] = "List of Event";
        $data['contentHeader'] = "mdl";
        $data['btn'] = array('title' => 'Add Event', 'url' => 'event/create', 'icon' => 'fas fa-plus');
        $data['event'] = event::all();
        return view('event.index',$data);
    }

    public function create(){
        $data['title'] = "Event | Launching";
        $data['action'] = "add";
        return view('event.action',$data); 
    }

    public function store(Request $request){
        $data = new event;
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Add Event Successfull');
        return redirect('event');
    }

    public function show($id){
    }
    
    public function edit($id){
        $data['title'] = "Event | Launching";
        $data['action'] = "edit";
        $data['data'] = event::findorfail($id);
        return view('event.action',$data); 
    }

    public function update(Request $request, $id){
        $data = event::findorfail($id);
        $data->name = $request->name;
        $data->save();
        session::flash('error','success');
        session::flash('message','Edit Event Successfull');
        return redirect('event');
    }
    
    public function destroy($id){
    }
}

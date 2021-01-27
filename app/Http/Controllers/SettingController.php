<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\company;
use App\Models\marketplace;
use App\Models\category;

class SettingController extends Controller{
    use \App\Traits\GeneralTrait;

    public function index(){
        $data['title'] = "Settings | Siapfulin";
        $data['subtitle'] = "Manage System";
        $data['contentHeader']= "bc";
		$bc[]= array('title'=> 'Settings','url'=>'','active'=>'1');
        $data['bc'] = $bc;
        // $data['companytab'] = company::find(Session('companyid'));
        // $data['country'] = json_decode(file_get_contents("https://restcountries.eu/rest/v2/all?fields=name;flag"), true);
        return view('setting.index', $data);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\users;
use App\Models\company;

class MainController extends Controller{
    use \App\Traits\GeneralTrait;

    public function __construct(){
        $this->timezone();
    }

    public function home(){
        echo "ini adalah home";
    }

    public function index($msg = null){
        $data['title'] = "Login | Siapfulin";
        if (Session::has('id')) {
            return redirect('dashboard');
        } else {
            return view('main.login', $data);
        }
    }

    public function auth(Request $request){
        $user = users::where(['email' => $request->email, 'password' => sha1($request->password)]);
        if ($user->count() > 0) {
            $data = $user->first();
            $ses = array(
                'id' => $data->id,
                'email' => $data->email,
                'password' => $data->password,
                'name' => $data->name,
                'roleid' => $data->role_id,
                'companyid' => $data->company_id,
                'companyname' => $data->company->name,
                'trial_expired' => $data->trial_expired,
                'status' => $data->status,
                'type' => $data->type,
            );
            Session::put($ses);
            $enc_email = hash_hmac('sha256', $request->email, 'LemonGrass');
            $enc_password = hash_hmac('sha256', $request->password, 'LemonGrass');
            $enc_combine = base64_encode(md5(hash_hmac('sha256', $request->email . $request->password, 'LemonGrass')));
            Session::put('token', base64_encode($enc_email . '/' . $enc_password . '/' . $enc_combine));
            $user = users::findorfail(Session::get('id'));
            $user->token = Session::get('token');
            $user->save();
            $this->log_system('login', 'Admin Logged In', Session::get('id'));
            return redirect('dashboard');
        } else {
            session::flash('error', 'danger');
            session::flash('message', 'Login Failed! Check Your Email and Password');
            return redirect('/');
        }
    }

    public function dashboard(){
        $data['title'] = "Dashboard | Siapfulin";
        return view('main.dashboard', $data);
    }

    public function forgot(){
        $data['title'] = "Forgot Password | Siapfulin";
        return view('main.forgot', $data);
    }

    public function register(){
        $data['title'] = "Register | Siapfulin";
        return view('main.register', $data);
    }

    public function register_action(Request $request){
        $company = new company;
        $company->name = $request->company;
        $company->created_at = date("Y-m-d H:i:s");
        $company->save();

        $user = new users;
        $user->email = $request->email;
        $user->password = sha1($request->pass1);
        $user->name = $request->username;
        $user->company_id = $company->id;
        $user->expired_date = date("Y-m-d H:i:s");
        $user->status = 'trial';
        $user->type = 'user';
        $user->active = '1';
        $user->created_at = date("Y-m-d H:i:s");
        $user->save();
        $this->log_system('Register', 'Register', $user->id);
        session::flash('error', 'success');
        session::flash('message', 'Register Successfull ! Please Login First');
        return redirect('/');
    }

    public function log($modul){
        $data['title'] = ucwords($modul . ' Log')." | Siapfulin";
        $data['log'] = (($modul == 'system') ? DB::table('systemlog')->select('systemlog.id', 'systemlog.ipaddress', 'systemlog.description', 'systemlog.timestamp', 'user.name', 'user.email')->join('user', 'systemlog.user_id', '=', 'user.id') : DB::table('emaillog')->select('emaillog.id', 'emaillog.to', 'emaillog.subject', 'emaillog.timestamp', 'user.name', 'user.email')->join('user', 'emaillog.user_id', '=', 'user.id'))->get();
        $data['contentHeader'] = "bc";
        $bc[] = array('title' => 'Log', 'url' => '#', 'active' => '0');
        $bc[] = array('title' => ucwords($modul) . ' Log ', 'url' => '', 'active' => '1');
        $data['bc'] = $bc;
        return View('main.log', $data, compact('modul'));
    }

    public function helps(){
        $data['title'] = "Helps  | Siapfulin";
        return view ('main.helps',$data);
    }

    public function logout($msg = null){
        $this->log_system('login', 'Admin Logged Out', Session::get('id'));
        $ses = array('id', 'email', 'password', 'name', 'roleid', 'companyid', 'trial_expired', 'status', 'token');
        //Session::forget($ses);
        Session::flush();
        if ($msg != null) {
            return redirect('/')->with(['msg' => $msg]);
        } else {
            return redirect('/');
        }
    }
}

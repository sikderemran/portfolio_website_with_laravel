<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User\Message;
use App\Models\Admin\Project;
use App\Models\Admin\Admin;
class UserController extends Controller
{
    public function home()
    {
        $admin_info=Admin::orderBy('id','desc')->first();
        $project_data=Project::orderBy('id','asc')->limit(4)->get();
        return view('user.index',compact('project_data','admin_info'));
    }
    public function load_more(Request $request)
    {
        if($request->ajax())
        {
            if($request->more_data)
            {
                $load_more=Project::where('id','>',$request->more_data)->orderBy('id','asc')->limit(4)->get();
            }
        }
        if($load_more->count()==0)
        {
            $i=0;
        }else{
            foreach($load_more as $count)
            {
                $i=$count->id;
            }
        }
        $data=array(
            $i,
            $load_more,
        );
        return json_encode($data);
        
    }

    public function message(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message'=>'required|string',
        ]);

        $message=new Message();
        $message->name=request('name');
        $message->email=request('email');
        $message->message=request('message');
        $message->save();
        return json_encode(['status'=>'success ok']);
    }
}

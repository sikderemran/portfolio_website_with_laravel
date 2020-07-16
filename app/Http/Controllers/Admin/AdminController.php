<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin\Admin;
use App\Models\Admin\Project;
use App\Models\User\Message;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    public function dashboard()
    {
        $project_data=Project::orderBy('id','desc')->get();
        return view('admin.dashboard',compact('project_data'));
    }
    public function show_add_project()
    {
        return view('admin.addproject');
    }
    public function save_project(Request $request)
    {
        $project=new Project();
        $project->title=request('title');
        $project->url=request('url');
     

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('assets/backend/images/'.$imageName);
            Image::make($image)->save($location);
            $project->image=$imageName;
        }

        $project->save();
        return redirect('/portfolio/saveproject');
    }
    public function project_edit($id)
    {
        $project_data=Project::where('id',$id)->first();
        return view('admin.editproject',compact('project_data'));
    }
    public function project_edit_save($id)
    {
        Project::where('id',$id)->update([
            'title'=>request('title'),
            'url'=>request('url'),
            'image'=>request('image')
        ]);
        return redirect('/admin');
    }
    public function project_delete($id)
    {
        Project::where('id',$id)->delete();
        return redirect('/admin');
    }
    public function show_all_message()
    {
        $message=Message::orderBy('id','desc')->get();
        return view('admin.allmessage',compact('message'));
    }
    public function message_seen($id)
    {
        Message::where('id',$id)->update([
            'status'=>1,
        ]);
    }

    public function show_admin_info()
    {
        return view('admin.admin_info');
    }
    public function save_admin_info(Request $request)
    {
        $project=new Admin();
        $project->name=request('name');

        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('assets/backend/images/'.$imageName);
            Image::make($image)->save($location);
            $project->image=$imageName;
        }

        $project->save();
        return view('admin.admin_info');
    }

}

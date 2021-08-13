<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function manage_user()
    {
        $data = User::get();
        return view('admin.profile.manage_users_index',compact('data'));
    }

    public function create_user()
    {
        return view('admin.profile.manage_users_create');
    }

    public function user_show($id)
    {
        $user = User::whereId($id)->first();
        return view('admin.profile.manage_users_show',compact('user'));
    }

    public function manage_edit_page($id)
    {
        $user = User::find($id);
        return view('admin.profile.manage_users_edit',compact('user'));
    }
    public function manage_user_store(Request $request)
    {
        // dd($request->all());
        
        if($request->id){
            $this->validate($request,[
                'name'=>'required',
                'email'=>"email|unique:users,email,$request->id",
                'password'=>'required',
                'role'=>'required',
            ]);
            $user = User::find($request->id);
        }else{
            $this->validate($request,[
                'name'=>'required',
                'email'=>"email|unique:users,email",
                'password'=>'required',
                'role'=>'required',
            ]);
            $user = new User();
        }
        
        $user->delete();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        if(isset($request->image)){
            if($request->hasFile('image')){
                $image = $request->image;
                $imageNewName = Time().".".$image->getClientOriginalExtension();
                $image->move('storage/users/',$imageNewName);
                $files = 'storage/users/'.$imageNewName;
            } 
            $user->image = $files;
        }else{
            $user->image = 'storage/users/avatar.jpg';
        }

        $user->save();
         return redirect('/manage-user');
    }

    public function manage_delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/manage-user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Role;

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
        return view('home');
    }

    public function activity()
    {
        return view('activity');
    }

    public function inputdata()
    {
        return view('inputdata');
    }

    public function search()
    {
        return view('search');
    }

    public function user()
    {
        $admins = Role::where('name', 'Admin')->first()->users;
        $user = new User();
        $users = $user->where('id', '!=',1)->get();
        // $users = $user->select()->get();
        return view('user', compact('users','admins'));
    }

    public function adduser(Request $request)
    {
        $name = $request->get('name');
        $user = new User();
        $exist = $user->where('name',$name)->first();
        if($exist !== null){
            return 0;
        }else{
            $username = $request->get('username');
            $role = $request->get('role');
            $password = $request->get('password');
            $email = $request->get('email');
            $admin = $request->get('admin');
            if($admin){
                User::create([
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'role_id' => $role,
                    'parent_id' => $admin,
                    'password' => Hash::make($password)
                ]);
                return 1;
            }else{
                User::create([
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'role_id' => $role,
                    'password' => Hash::make($password)
                ]);
                return 1;
            }
        }        
    }    

    public function useredit($id)
    {
        $user = User::find($id);
        $admins = Role::where('name', 'Admin')->first()->users;

        // dd(Role::where('name', 'Admin')->first()->users);

        // foreach( Role::where('name', 'Admin')->first()->users as $item ) {
        //     dd($item->name);
        // }
        
        return view('user_edit',compact('user','admins'));
    }

    public function user_edit(Request $request)
    {
        $name = $request->get('name');
        $id = $request->get('id');
        $count = User::where('name',$name)->count();
        if($count > 0){
            $existUser = User::where('name',$name)->select('id')->first();
            if($existUser->id != $id){
                $errors = ['name' => 'The User ID has already been taken.'];
                return back()->withErrors($errors);
            }
        }
        $username = $request->get('username');
        $role = $request->get('role');
        $password = $request->get('password');
        $email = $request->get('email');
        $admin = $request->get('admin');
        DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'role_id' => $role,
            'parent_id' => $admin,
            'password' => Hash::make($password)
        ]);
        // return redirect()->route('user');
        return back();
        
        // $this->validate($request, [
        //     'name' => 'required|unique:users,name',
        // ]);
        dd($request->all());
    }

    public function userdelete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return back();
    }
}

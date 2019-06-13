<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Product;
use App\Models\Role;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


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
        $chart_end = Carbon::now();
        $chart_start = $chart_end->copy()->subDays(5);
        $period = CarbonPeriod::create($chart_start,$chart_end);
        $key_array = $sold_mount = $car_cat = $bus_cat = $ship_cat = array();
        foreach ($period as $date) {
            $key = $date->format('Y-m-d');
            $key_display = $date->format('M/d');
            array_push($key_array, $key_display);
            $daily_sold = Product::where('sold','on')->whereDate('updated_at',$key)->sum('price');
            array_push($sold_mount,$daily_sold);
            $daily_car = Category::find(1)->products()->whereDate('created_at',$key)->count();
            $daily_bus = Category::find(2)->products()->whereDate('created_at',$key)->count();
            $daily_ship = Category::find(3)->products()->whereDate('created_at',$key)->count();
            array_push($car_cat,$daily_car);
            array_push($bus_cat,$daily_bus);
            array_push($ship_cat,$daily_ship);
        }
        return view('home',compact('key_array','sold_mount','car_cat','bus_cat','ship_cat'));
    }

    private function generateDateRange(Carbon $start_date, Carbon $end_date)
    {
        $dates = [];

        for($date = $start_date->copy(); $date->lte($end_date); $date->addDay()) {
            $dates[] = $date->format('Y-m-d');
        }

        return $dates;
    }

    public function setting()
    {
        $admins = Role::where('name', 'Admin')->first()->users;
        return view('setting', compact('admins'));
    }

    public function user_setting(Request $request)
    {
        $id = Auth::user()->id;
        $cur_photo = Auth::user()->photo;
        $username = $request->get('username');
        $set_email = $request->get('email');
        $cur_password = $request->get('cur_password');
        $new_password = $request->get('password');
        
        if($cur_password){
            if(!Hash::check($cur_password, Auth::user()->password)){
                $errors = ['cur_password' => 'The password is incorrect.'];
                return back()->withErrors($errors);
            }else{
                if($request->hasfile('photo')){
                    $fileName = time() . '.' . request()->photo->getClientOriginalExtension();
                    request()->photo->move(public_path('images/avatars'),$fileName);
                    // $request->photo->storeAs('public/profile',$fileName);
                    $photo = 'images/avatars/' . $fileName;
                }else{
                    $photo = $cur_photo;
                }
                DB::table('users')
                ->where('id', $id)
                ->update([
                    'username' => $username,
                    'email' => $set_email,
                    'password' => Hash::make($new_password),
                    'photo' => $photo,
                ]);
                return back();
            }
        }else{
            if($request->hasfile('photo')){
                $fileName = time() . '.' . request()->photo->getClientOriginalExtension();
                request()->photo->move(public_path('images/avatars'),$fileName);
                // $request->photo->storeAs('public/profile',$fileName);
                $photo = 'images/avatars/' . $fileName;
            }else{
                $photo = $cur_photo;
            }
            DB::table('users')
            ->where('id', $id)
            ->update([
                'username' => $username,
                'email' => $set_email,
                'photo' => $photo,
            ]);
            return back();
        }
        
        
    }



    public function user()
    {
        // $role = Auth::user()->role->name;
        // if($role != "Super Admin") return back();
        $admins = Role::where('name', 'Admin')->first()->users;
        $user = new User();
        $users = $user->where('id', '!=',1)->get();
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
            $photo = 'images/avatars/1.png';
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
                    'photo' => $photo,
                    'password' => Hash::make($password)
                ]);
                return 1;
            }else{
                User::create([
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'role_id' => $role,
                    'photo' => $photo,
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
        return back();
    }

    public function userdelete($id)
    {
        $exist = User::find($id)->my_users->count();
        if($exist > 0){
            $errors = ['exist' => 'You can\'t delete this "Admin". Because, this "Admin" has some "User". First, you have to delete the "User"'];
            return back()->withErrors($errors);
        }else{
            DB::table('users')->where('id',$id)->delete();
            return back();
        }
        
    }
}

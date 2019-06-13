<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EditEvent;
use App\Models\EventHistory;
use App\Models\Role;
use App\Models\Product;
use App\Models\Category;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataEdit extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Auth::user()->products;
        return view('inputdata',compact('products'));
    }

    public function input_product()
    {
        $category = Category::get();
        return view('product',compact('category'));
    }

    public function product_add(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|unique:products,product_id',
            'product_name' => 'required',
            'category_id' => 'required',
            'vendor' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $product = $request->all();
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $product_id = $request->get('product_id');
        $category_name = Category::find($request->get('category_id'))->select('name')->first()->name;
        $product['user_id'] = $user_id;
        Product::create($product);
        $event = EditEvent::where('id',2)->first();
        $event_name = $event->event_name;
        $event_type = $event->event_type;
        $event_name = str_replace('uuu',$user_name,$event_name);
        $event_name = str_replace('nnn',$product_id,$event_name);
        $event_name = str_replace('ccc',$category_name,$event_name);
        EventHistory::create([
            'user_id' => $user_id,
            'history_name' => $event_name,
            'history_type' => $event_type
        ]);
        return redirect('inputdata')->with('success','Product Add Success');
    }

    public function product_edit($id)
    {
        $product = Product::find($id);
        $category = Category::get();
        return view('product_edit',compact('product','category'));
    }

    public function product_change(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'category_id' => 'required',
            'vendor' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        $product = $request->all();
        if(!$request->has('sold')){
            $product['sold'] = 'off';
        }
        $product_id = $request->get('id');
        unset($product['id']);
        unset($product['_token']);
        DB::table('products')
        ->where('id', $product_id)
        ->update($product);
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $category_name = Category::find($request->get('category_id'))->select('name')->first()->name;
        $event = EditEvent::where('id',3)->first();
        $event_name = $event->event_name;
        $event_type = $event->event_type;
        $event_name = str_replace('uuu',$user_name,$event_name);
        $event_name = str_replace('nnn',$product_id,$event_name);
        $event_name = str_replace('ccc',$category_name,$event_name);
        EventHistory::create([
            'user_id' => $user_id,
            'history_name' => $event_name,
            'history_type' => $event_type
        ]);
        return redirect('inputdata')->with('success','Product Update Success');
    }

    public function product_delete($id)
    {
        $category_id = Product::find($id)->category_id;
        $product_id = Product::find($id)->product_id;
        DB::table('products')->where('id',$id)->delete();
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $category_name = Category::find($category_id)->select('name')->first()->name;
        $event = EditEvent::where('id',4)->first();
        $event_name = $event->event_name;
        $event_type = $event->event_type;
        $event_name = str_replace('uuu',$user_name,$event_name);
        $event_name = str_replace('nnn',$product_id,$event_name);
        $event_name = str_replace('ccc',$category_name,$event_name);
        EventHistory::create([
            'user_id' => $user_id,
            'history_name' => $event_name,
            'history_type' => $event_type
        ]);
        return back();
    }

    public function search()
    {
        $admins = Role::where('name', 'Admin')->first()->users;
        $category = Category::get();
        $products = Product::get();
        return view('search',compact('products','category','admins'));
    }

    public function admin_search(Request $request)
    {
        $user_id = $request->get('admin_id');
        $category = Category::get();
        $admins = Role::where('name', 'Admin')->first()->users;
        if($user_id){
            $products = User::find($user_id)->products;
            return view('search',compact('products','admins','category','user_id'));
        }else{
            $products = Product::get();
            return view('search',compact('products','admins','category'));
        }
        
    }

    public function category_search(Request $request)
    {
        $category_id = $request->get('category_id');
        $admins = Role::where('name', 'Admin')->first()->users;
        $category = Category::get();
        if($category_id){
            $products = Category::find($category_id)->products;
            return view('search',compact('products','admins','category','category_id'));
        }else{
            $products = Product::get();
            return view('search',compact('products','admins','category'));
        }
    }

    public function core_search(Request $request)
    {
        $info = $request->get('info');
        $keyword = $request->get('keyword');
        switch ($info) {
            case '1':
                $products = Product::where('product_id','like','%'.$keyword.'%')->get()->load('category')->toArray();
                return response()->json($products);
                break;
            case '2':
                $products = Product::where('product_name','like','%'.$keyword.'%')->get()->load('category')->toArray();
                return response()->json($products);
                break;
            case '3':
                $products = Product::where('vendor','like','%'.$keyword.'%')->get()->load('category')->toArray();
                return response()->json($products);
                break;
            case '4':
                $products = Product::where('sold','like','%'.$keyword.'%')->get()->load('category')->toArray();
                return response()->json($products);
                break;
            default:
                $products = Product::get()->load('category')->toArray();
                return response()->json($products);
                break;
        }
    }

    public function user_inputdata()
    {
        $products = Auth::user()->my_admin->products;
        return view('userinput',compact('products'));
    }
}

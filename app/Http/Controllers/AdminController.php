<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function index(){
        $url = url('/admin');
        $title = "Admin Registration form";
        $data = compact('url','title');
        return view('admin/registration')->with($data);
    }
    //Admin information store
    public function store(Request $req)
    {
        // $req->validate(
        //     [
        //         'name'=>'required',
        //         'gmail'=>'required',
        //         'addreqs'=>'required',
        //         'password'=>'required | Confirmed',
        //         'date_of_birth'=>'required',
        //         'image' => 'required',
        //     ]
        //     );
        $name = $req->get('name');
        $gmail = $req->get('gmail');
        $address = $req->get('address');
        $password = $req->get('password');
        $date_of_birth = $req->get('date_of_birth');
        $image = $req->file('image')->getClientOriginalName();
        //move uploaded file 

        $req->image->move(public_path('images'), $image);
        
        echo "<pre>";
        print_r($req->all());
        $admin = new Admin;
        $admin->name = $req -> name;
        $admin->gmail = $req -> gmail;
        $admin->address = $req -> address;
        $admin->password = Hash::make($req->password);
        $admin->date_of_birth = $req -> date_of_birth;
        $admin->image = $req -> image;
        $admin->save();
        return redirect('admin_show');
    }
    //admin show
    public function admin_info(Request $req) 
    {
        $admin = Admin::all();
        $title = "Admins";
        $data = compact('admin','title');
        return view('admin.admin_show')->with($data);
    }
    //admin delete
    public function admindelete($id) 
    {
        $admin=Admin::find($id);
        if(!is_null($admin)) 
        {
            $admin->delete();
        }
        return redirect('admin_show');
    }

    //Admin Profile
    public function admin_profile_show($id) 
    {
        $admin= Admin::find($id);
        if(is_null($admin)){
            
            return redirect('admin_profile');
        }
        else{
            $title = "Admin Profile";
            $url = url('/admin_profile/update') ."/". $id;
            $data = compact('admin', 'url','title');
            return view('admin.admin_profile')->with($data);
        }
    }

    public function admin_profile_edit($id)
    {
        $admin= Admin::find($id);
        $title = "Update Profile";        
        $data = compact('admin','title');
        return view ('admin.update_profile')->with($data);
        
    }
    // admin profile updated
    public function admin_profile_update($id, Request $req)
    {
        $admin = Admin::find($id);
        $admin->name = $req -> name;
        $admin->gmail = $req -> gmail;
        $admin->addreqs = $req -> addreqs;
        $admin->password = Hash::make ($req -> password);
        $admin->date_of_birth = $req -> date_of_birth;
        $admin->image = $req -> image;
        $admin->update();

        $title = "Update Profile";
        $data = compact('admin','title','id');
        return redirect('admin_profile/{id}')->with($data);
    }
    

    //Customer Information Show
    public function show(Request $req) 
    {
        $customer = User::all();
        $url = url('/customer_info');
        $title = "Customer Information";
        $data = compact('customer', 'url', 'title');
        return view('admin.customer_info_show')->with($data);
    }

    //product form view
    public function product() 
    {
        $product = new Product;
        $url = url('/add_product');
        $title = "Add Product";
        $data = compact('product','url','title');
        return view('admin/product')->with($data);
    } 
    //product show
    public function show_product(Request $req) 
    {
        $product = Product::all();
        $title = "Show Product";
        $data = compact('product','title');
        return view('admin.product_show')->with($data);
    }
    //product add into database
    public function add_product(Request $req) 
    {
        $product_name = $req->get('product_name');
        $product_price = $req->get('product_price');
        $product_description = $req->get('product_description');
        $image = $req->file('image')->getClientOriginalName();
        $category = $req->get('category');
        $size = $req->get('size');
        //move uploaded file 

        $req->image->move(public_path('product_images'), $image);

        $product = new Product;
        $product->product_name = $req -> product_name;
        $product->product_price = $req -> product_price;
        $product->product_description = $req -> product_description;
        $product->image = $req -> image;
        $product->quantity = $req -> quantity;
        $product->category = $req -> category;
        $product->size = $req -> size;
        $product->save();
        return redirect('show_product');
    }
    
    // product delete from the database
    public function delete($id) 
    {
        $product=Product::find($id);
        if(!is_null($product)) 
        {
            $product->delete();
        }
        return redirect('show_product');
    }

    //product update from the database
    public function edit($id)
    {
        $product= Product::find($id);
        if(is_null($product)){
            
            return redirect('show_product');
        }
        else{
            $title = "Update Product";
            $url = url('/show_product/update') ."/". $id;
            $data = compact('product', 'url','title');
            return view('admin.product')->with($data);
        }
    }
    // product updated
    public function update($id, Request $req)
    {   
        $image = $req->file('image')->getClientOriginalName();
        $req->image->move(public_path('product_images'), $image);
        
        $product = Product::find($id);
        $product->product_name = $req -> product_name;
        $product->product_price = $req -> product_price;
        $product->product_description = $req -> product_description;
        $product->image = $req -> image;
        $product->quantity = $req -> quantity;
        $product->category = $req -> category;
        $product->size = $req -> size;
        $product->save();

        return redirect('show_product');
    }
}
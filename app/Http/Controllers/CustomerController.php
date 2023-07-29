<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class CustomerController extends Controller
{
    // customer registration show
    public function index() 
    {
        $url = url('/customer');
        $title = "Customer Registration form";
        $customer = User::all();
        $data = compact('customer','url','title');
        return view('customer/registration')->with($data);
    }
    //customer registration information store
    public function store(Request $res)
    {
        echo "<pre>";
        print_r($res->all());
        $customer = new User;
        $customer->name = $res['name'];
        $customer->email = $res['email'];
        $customer->phone_number = $res['phone_number'];
        $customer->address = $res['address'];
        $customer->password = Hash::make($res->password);        
        $customer->save();

    }

    //customer profile show
    public function customer_profile_show($id) 
    {
        $customer= User::find($id);
        if(is_null($customer)){
            
            return redirect('customer_profile');
        }
        else{
            $title = "Customer Profile";
            $url = url('/customer_profile/update') ."/". $id;
            $data = compact('customer', 'url','title');
            return view('customer.customer_profile')->with($data);
        }
    }

    //customer profile edit
     public function customer_profile_edit($id)
    {
        $customer= User::find($id);
        $title = "Update Customer Profile";     
        $data = compact('customer','title');
        return view ('customer.registration')->with($data);
        
    }

    public function customer_profile_update($id, Request $req)
    {
        $customer = User::find($id);
        $customer = new User;
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->phone_number = $req['phone_number'];
        $customer->address = $req['address'];
        $customer->password = Hash::make($req->password);        
        $customer->update();
    }

    public function product() 
    {
        $product = Product::all();
        return view('customer.home')->with('product', $product);
    }

    public function s_product($id)
    {
        $product= Product::find($id);
        if(is_null($product)){
            
            return redirect('customer.home');
        }
        else{
            $url = url('/single_product') ."/". $id;
            $data = compact('product', 'url');
            return view('customer.single_product')->with($data);
        }
    }
}
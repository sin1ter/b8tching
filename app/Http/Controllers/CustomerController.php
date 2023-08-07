<?php

namespace App\Http\Controllers;
use App\Models\Product;
<<<<<<< HEAD
=======
use App\Models\Customer;
>>>>>>> 886dddca8c70b5beddb890256e64ba3bdc9ab26d
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;
use Auth;
use Session;


class CustomerController extends Controller
{
    // customer registration show
    public function index() 
    {
        $url = url('/customer');
        $title = "Customer Registration form";
        $customer = Customer::all();
        $data = compact('customer','url','title');
        return view('customer/registration')->with($data);
    }
    //customer registration information store
    public function store(Request $res)
    {
        
        echo "<pre>";
        print_r($res->all());
        $customer = new Customer;
        $customer->name = $res['name'];
        $customer->email = $res['email'];
        $customer->phone_number = $res['phone_number'];
        $customer->address = $res['address'];
        $customer->password = Hash::make($res->password);        
        $customer->save();

    }

    //customer login

    public function customerlogin(){
        $url = url('login/customer');
        $data = compact('url');
        return view('customer.customer_login')->with($data);
    }

    public function customerlogincheck(Request $request){
        $url = url('login/customer');
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::guard('customers')->attempt(['email' => $request->email,'password'=>$request->password])){
            return redirect('/shop_login');
        }
        else{
            Session::flash('error-msg', 'Invalid Email or Password');
            return redirect()->back();
        }
    }

    //customer logout
    public function customerlogout(){
        Auth::guard('customers')->logout();
        return redirect('/shop');
    }

    public function add_to_cart(Request $request){
        $cart = new Cart;
        $cart->cus_id= $request->session()->get('customers')['cus_id'];
        $cart->product_id=$request->input('product_id');
        $cart->save();
        return redirect('/shop');
    }
    //customer profile show
    public function customer_profile_show($id) 
    {
        $customer= Customer::find($id);
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
        $customer= Customer::find($id);
        $title = "Update Customer Profile";     
        $data = compact('customer','title');
        return view ('customer.registration')->with($data);
        
    }

    public function customer_profile_update($id, Request $req)
    {
        $customer = Customer::find($id);
        $customer = new Customer;
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->phone_number = $req['phone_number'];
        $customer->address = $req['address'];
        $customer->password = Hash::make($req->password);        
        $customer->update();
    }

    public function product() 
    {
        $product = Product::paginate(12);
        $products = Product::inRandomOrder()->paginate(4);
        $data = compact('product', 'products');
        return view('customer.home')->with($data);
    }

    //after login home page
    public function login_product() 
    {
        $product = Product::paginate(12);
        $products = Product::inRandomOrder()->paginate(4);
        $data = compact('product', 'products');
        return view('customer.home_login')->with($data);
    }

    public function s_product($id)
    {
        $product= Product::find($id);
        $pro = Product::paginate(4);
        if(is_null($product)){
            
            return redirect('customer.home');
        }
        else{
            $url = url('/single_product') ."/". $id;
            $data = compact('product', 'pro', 'url');
            return view('customer.single_product')->with($data);
        }
    }

    public function add_to_cart(Request $request) 
    {
        if($request->session()->has('user')) 
        {
            $cart = new Cart;
            $cart->user_id= $request->session()->get('user')['id'];
            $cart->product_id=$request->input('product_id');
            $cart->save();
            return redirect('/shop');
        }
        else 
        {
            return redirect('/login');
        }
    }
}
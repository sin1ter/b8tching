<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Customer;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function index() 
    {
        return view('admin/registration');
    }
    public function store(Request $res)
    {
        // $res->validate(
        //     [
        //         'name'=>'required',
        //         'gmail'=>'required',
        //         'address'=>'required',
        //         'password'=>'required | Confirmed',
        //         'date_of_birth'=>'required',
        //         'image' => 'required',
        //     ]
        //     );
        echo "<pre>";
        print_r($res->all());
        $admin = new Admin;
        $admin->name = $res['name'];
        $admin->gmail = $res['gmail'];
        $admin->address = $res['address'];
        $admin->password = $res['password'];
        $admin->date_of_birth = $res['date_of_birth'];
        $admin->image = $res['image'];
        $admin->save();
    }

    public function show(Request $req) 
    {
        $customer = Customer::all();
        $data = compact('customer');
        return view('admin.customer_info_show')->with($data);
    }
}
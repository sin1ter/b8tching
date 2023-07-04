<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class CustomerController extends Controller
{
    public function index() 
    {
        return view('customer/registration');
    }
    public function store(Request $res)
    {
        echo "<pre>";
        print_r($res->all());
        $customer = new Customer;
        $customer->name = $res['name'];
        $customer->gmail = $res['gmail'];
        // $customer->gender = $res['gender'];
        $customer->phone_number = $res['phone_number'];
        $customer->address = $res['address'];
        $customer->password = Hash::make($res->password);        
        $customer->save();
    }
}
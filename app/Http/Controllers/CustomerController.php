<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        $customer = new User;
        $customer->name = $res['name'];
        $customer->email = $res['email'];
        $customer->phone_number = $res['phone_number'];
        $customer->address = $res['address'];
        $customer->password = Hash::make($res->password);        
        $customer->save();

    }
}
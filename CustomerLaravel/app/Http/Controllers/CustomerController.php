<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.customer.list',compact('customers'));
    }
    public function create(){
        return view('admin.customer.add');
    }
    public function store(StoreCustomerRequest $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->email = $request->email;
        $customer->save();
        $customers = Customer::orderBy('id','DESC')->get();
        return redirect()->route('customer.index');
    }
}

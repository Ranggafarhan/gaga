<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Model\customer;

class CustomerController extends Controller
{
    public function create() {
      return view('customers.create');  
    }
    public function store(Requests $Requests) {
        $this->validate($Request, [
            'code' => 'required|unique:customer|max:4',
            'name' => 'required|max:30',
            'phone' => 'numeric',
            'address' => 'required'
        ]);

        // orm ->insert/save
        $customer = new customer;
        $customer -> code = $request->code;
        $customer -> name = $request->name;
        $customer -> phone = $request->phone;
        $customer -> address = $request->address;

        $customer->save();
    }
}
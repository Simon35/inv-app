<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function get_customers() {
        $customers = Customer::orderBy('id','DESC')->get();
        // var_dump("clients: ".$customers);
        return response()->json([
            'customers' => $customers
        ],200);
    }
}

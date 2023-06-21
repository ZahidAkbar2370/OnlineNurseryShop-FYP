<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $customers = User::where("role", "customer")->get();
        
        return view("Admin.Customer.view_customers",compact('customers'));
    }

    public function create() {
        return view("Admin.Customer.create_customer");
    }

    function store(Request $request){

        $request->validate([
            "email" => "required|unique:users",
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'password' => Hash::make($request->name),
        ]);

        return redirect('admin/customers');
    }

    public function destroy($id) {
        User::find($id)->delete();

        return redirect()->back();

    }
}

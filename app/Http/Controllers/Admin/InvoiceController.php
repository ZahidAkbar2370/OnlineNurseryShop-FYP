<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $invoices = Invoice::all();
        
        return view("Admin.Invoice.view_invoices",compact('invoices'));
    }

    public function detail($id) {
        $invoice_detail = Invoice::find($id)->with("customer");
        echo "<pre>";print_r($invoice_detail);exit;
        return view("Admin.Invoice.invoice_detail",compact('invoice_detail'));
    }

    public function create() {
        return view("Admin.Invoice.create_invoice");
    }

    function store(Request $request){

        $request->validate([
            "email" => "required|unique:users",
        ]);

        Invoice::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'password' => Hash::make($request->name),
        ]);

        return redirect('admin/customers');
    }

    public function destroy($id) {
        Invoice::find($id)->delete();

        return redirect()->back();

    }
}

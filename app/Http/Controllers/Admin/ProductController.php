<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $products = Product::all();
        
        return view("Admin.Product.view_products",compact('products'));
    }

    public function create() {
        $categories = Category::all();

        return view("Admin.Product.create_product", compact('categories'));
    }

    function store(Request $request){

        $imagePath = 'images/product_image_default.png';
        if($request->file('image')){
            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images', $filename);

            $imagePath = 'images/' . $filename;
        }

        Product::create([
            "category_id" => $request->category_id,
            "item_name" => $request->product_name,
            "sale_price" => $request->sale_price,
            "discount_price" => $request->discount_price,
            "description" => $request->description,
            "status" => "in_stock",
            "image_1" => $imagePath,
        ]);

        return redirect('admin/products');
    }

    public function destroy($id) {
        Product::find($id)->delete();

        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $categories = Category::all();
        
        return view("Admin.Category.view_categories",compact('categories'));
    }

    public function create() {
        return view("Admin.Category.create_category");
    }

    function store(Request $request){
        $request->validate([
            "category_name" => "required",
            "image" => "sometimes|image|mimes:jpeg,png,jpg,gif",
        ]);

        $imagePath = 'images/category_default.png';
        if($request->file('image')){
            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('images', $filename);

            $imagePath = 'images/' . $filename;
        }

        Category::create([
            'category_name' => $request->category_name,
            'image' => $imagePath,
        ]);

        return redirect('admin/categories');
    }

    public function destroy($id) {
        Category::find($id)->delete();

        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function profile(){
        return view('profile');
    }

    function profileUpdate(Request $request) {
        $id = Auth::user()->id ?? 1;

        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->mobile_no = $request->mobile_no;
        $profile->address = $request->address;
        $profile->update();

        session()->flash('success', 'Profile Updated Successfully!');
        return redirect()->back();
    }
}

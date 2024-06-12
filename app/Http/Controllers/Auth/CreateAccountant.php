<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Items;
class CreateAccountant extends Controller
{
    public function index(){
        return view('auth.createaccountant'); 
    }

    public function create(Request $request){
        $data = $request->all(); 
     Validator::make( $data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'is_admin' =>(int)$request['is_admin'],
            'password' => Hash::make($request['password']),
        ]);
        $items = Items::select('item','type','price')->get()->toArray();
        return view('auth.home',compact('items'));

    }
}

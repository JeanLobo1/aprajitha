<?php

namespace App\Http\Controllers\Accountant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Items;

class BookKeepingController extends Controller
{

    public function index(){
     
        return view('accountant.bookkeeping');
    }

    public function create(Request $request){
        $data = $request->all(); 
     Validator::make( $data, [
            'item' => ['required'],
            'type' => ['required'],
            'price' => ['required'],
        ]);

        Items::create([
            'item' => $request['item'],
            'type' => $request['type'],
            'price' =>$request['price'],

        ]);

        return view('accountant.home');

    }
}

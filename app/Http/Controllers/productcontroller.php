<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productcontroller extends Controller
{
    function index(){

    }

    function create(){
        return view('products.create');
    }

    function store(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'sku' => 'required|max:3',
            'price' => 'required|numeric',
            'description' => 'required',
        ];
        
        if($request->image != ''){
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    function show($id){
    
    }
    
    function edit($id){
        
    }

    function update(Request $request, $id){
    
    }

    function destroy($id){
        
    }

}
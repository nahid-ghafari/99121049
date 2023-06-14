<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigitalProducts;

class DigitalProductsController extends Controller
{
    public function DigitalProducts()
    {
        $DigitalProducts = DigitalProducts::all(); 
        // return view('DigitalProducts',['DigitalProduct'=>$DigitalProducts]);
        return view('DigitalProducts',compact('DigitalProducts'));
    }
    public function create()
    {
        return view('create');
    }
    public function addDigitalProducts(Request $request)
    {
        
            // dd($request->file());
            $sizePicture = $request->file('picture')->getSize();
            $namePicture = $request->file('picture')->getClientOriginalName();
            // $namePicture = $request->file('picture')->getClientOriginalExtension();
            // $namePicture = $request->file('picture')->getSize();
            $request->file('picture')->storeAs('public/images/',$namePicture);
            $DigitalProducts = new DigitalProducts();
            $DigitalProducts->namePicture = $namePicture;
            $DigitalProducts->sizePicture = $sizePicture;
            $DigitalProducts->type= $request->input('type');
            $DigitalProducts->size = $request->input('size');
            $DigitalProducts->color = $request->input('color');
            $DigitalProducts->price = $request->input('price');
            $DigitalProducts->description = $request->input('description');
            $DigitalProducts->save();
            return redirect('/DigitalProducts');

           
    }
    //baray compare bishtarin gheimat
    public function compare()
    {
        $mostExpensive = DigitalProducts::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
    
}

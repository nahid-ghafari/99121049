<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptops;

class LaptopsController extends Controller
{
    public function Laptops()
    {
        $Laptops = Laptops::all(); 
        // return view('Laptops',['Laptops'=>$Laptops]);
        return view('Laptops',compact('Laptops'));
    }
    public function create1()
    {
        return view('create1');
    }
    public function addLaptops(Request $request)
    {
        // dd($request->file());
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        // $namePicture = $request->file('picture')->getClientOriginalExtension();
        // $namePicture = $request->file('picture')->getSize();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $Laptops = new Laptops();
        $Laptops->namePicture = $namePicture;
        $Laptops->sizePicture = $sizePicture;
        $Laptops->type= $request->input('type');
        $Laptops->size = $request->input('size');
        $Laptops->color = $request->input('color');
        $Laptops->price = $request->input('price');
        $Laptops->description = $request->input('description');
        $Laptops->save();
        return redirect('/Laptops');
    }
    //baray compare bishtarin gheimat
    public function compare()
    {
        $mostExpensive = Laptops::orderBy('price', 'desc')->first();

            return view('compare', ['mostExpensive' => $mostExpensive]);
    }        
}

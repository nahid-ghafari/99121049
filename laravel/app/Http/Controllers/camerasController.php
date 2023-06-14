<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cameras;

class camerasController extends Controller
{
    public function cameras()
    {
        $cameras = cameras::all();
        return view('cameras',compact('cameras'));
    }
    public function create3()
    {
        return view('create3');
    }
    public function addcameras(Request $request)
    {
        // dd($request->file());
        $sizePicture = $request->file('picture')->getSize();
        $namePicture = $request->file('picture')->getClientOriginalName();
        // $namePicture = $request->file('picture')->getClientOriginalExtension();
        // $namePicture = $request->file('picture')->getSize();
        $request->file('picture')->storeAs('public/images/',$namePicture);
        $Cameras = new Cameras();
        $Cameras->namePicture = $namePicture;
        $Cameras->sizePicture = $sizePicture;
        $Cameras->type= $request->input('type');
        $Cameras->size = $request->input('size');
        $Cameras->color = $request->input('color');
        $Cameras->price = $request->input('price');
        $Cameras->description = $request->input('description');
        $Cameras->save();
        return redirect('/cameras');

    }
    //baray compare bishtarin gheimat
    public function compare()
    {
        $mostExpensive = cameras::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}

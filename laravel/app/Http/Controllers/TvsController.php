<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tvs;

class TvsController extends Controller
{
    public function Tvs()
    {
        $Tvs = Tvs::all();
        return view('Tvs',compact('Tvs'));
    }
    public function create4()
    {
        return view('create4');
    }
    public function addTvs(Request $request)
    {
         // dd($request->file());
         $sizePicture = $request->file('picture')->getSize();
         $namePicture = $request->file('picture')->getClientOriginalName();
         // $namePicture = $request->file('picture')->getClientOriginalExtension();
         // $namePicture = $request->file('picture')->getSize();
         $request->file('picture')->storeAs('public/images/',$namePicture);
         $Tvs = new Tvs();
         $Tvs->namePicture = $namePicture;
         $Tvs->sizePicture = $sizePicture;
         $Tvs->type= $request->input('type');
         $Tvs->size = $request->input('size');
         $Tvs->color = $request->input('color');
         $Tvs->price = $request->input('price');
         $Tvs->description = $request->input('description');
         $Tvs->save();
         return redirect('/Tvs');

        
    }
    //baray compare bishtarin gheimat
    public function compare()
    {
        $mostExpensive = Tvs::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}

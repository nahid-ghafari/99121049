<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablets;

class tabletsController extends Controller
{
    public function tablets()
    {
        $tablets = tablets::all();
        return view('tablets',compact('tablets'));
    }
    public function create2()
    {
        return view('create2');
    }
    public function addtablets(Request $request)
    {
         // dd($request->file());
         $sizePicture = $request->file('picture')->getSize();
         $namePicture = $request->file('picture')->getClientOriginalName();
         // $namePicture = $request->file('picture')->getClientOriginalExtension();
         // $namePicture = $request->file('picture')->getSize();
         $request->file('picture')->storeAs('public/images/',$namePicture);
         $tablets = new tablets();
         $tablets->namePicture = $namePicture;
         $tablets->sizePicture = $sizePicture;
         $tablets->type= $request->input('type');
         $tablets->size = $request->input('size');
         $tablets->color = $request->input('color');
         $tablets->price = $request->input('price');
         $tablets->description = $request->input('description');
         $tablets->save();
         return redirect('/tablets');
    }
    //baray compare bishtarin gheimat
    public function compare()
    {
        $mostExpensive = tablets::orderBy('price', 'desc')->first();

        return view('compare', ['mostExpensive' => $mostExpensive]);
    }
}

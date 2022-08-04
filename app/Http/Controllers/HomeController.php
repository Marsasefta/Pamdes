<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\User;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $datas = Pelanggan::get();
        return view('home', ['datas' => $datas]);

        // $datas = Pelanggan::where('id', Auth::user()->id)->get();
        // return view('home', ['datas' => $datas]);


    }

    public function update(Request $request, $id)
    {
		$admins = User::findOrFail($id);
		$admins->name = $request->name;
		$admins->email = $request->email;
		$admins->confirmpass = $request->confirmpass;
		$admins->role = $request->role;
        $admins->update($request->all());
        return redirect()->back();
    }

    public function rules()
    {
       
        return view('rules');

    }

    
}

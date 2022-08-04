<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use Auth;
class PelangganPAMController extends Controller
{
    public function index()
    {
		// ->where('iduser', Auth::user()->id)->get()
		$posts = Pelanggan::with('user')->where('iduser', Auth::user()->id)->get();
        return view('halaman-pelanggan', compact('posts'));
		
    }

}

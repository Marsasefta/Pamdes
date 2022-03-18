<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatacustomerController extends Controller
{
    public function index()
    {
		// $posts = Pelanggan::get();
        return view('admin.datacustomer');
    }
}

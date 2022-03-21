<?php

namespace App\Http\Controllers;
use App\Datacustomer;
use Illuminate\Http\Request;
use DB;

class DatacustomerController extends Controller
{
    public function index()
    {
        $customers = datacustomer::get();
        return view('admin.datacustomer', compact('customers'));
		// $posts = Pelanggan::get();
        // return view('admin.datacustomer');
    }

    public function store(Request $request)
	{
	// insert data ke table
	$table = datacustomer::create([
		'nama' => $request->nama,
		'rekening' => $request->rekening,
		'alamat' => $request->alamat,
        'gender' => $request->gender,
        'rt' => $request->rt,
        'rw' => $request->rw,
		
	]);
	if ($table) {
		return redirect()
			->route('datacustomer')
			->with([
				'success' => 'New post has been created successfully'
			]);
	} else {
		return redirect()
			->back()
			->withInput()
			->with([
				'error' => 'Some problem occurred, please try again'
			]);
	}}

    public function destroy($id)
    {
		DB::table('datacustomers')->where('id', $id)->delete();
		return redirect('datacustomer')->with('data', 'berhasil dihapus!');
    }
}

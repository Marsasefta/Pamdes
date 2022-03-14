<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;


class AdminController extends Controller
{
    public function index()
    {
		$posts = Pelanggan::get();
        return view('admin.dashboard', compact('posts'));
    }

    // method untuk insert data ke table
public function store(Request $request)
	{
	// insert data ke table
	$table = Pelanggan::create([
		'Rekening' => $request->Rekening,
		'Nama' => $request->Nama,
		'Jumlah' => $request->Jumlah,
		
	]);
	if ($table) {
		return redirect()
			->route('dashboard')
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
		DB::table('pelanggans')->where('id', $id)->delete();
		return redirect('dashboard') ->with('data', 'berhasil dihapus!');
    }
}

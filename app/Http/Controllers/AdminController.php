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
		'tanggal' => $request->tanggal,
	
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

	/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */

	public function update(Request $request, $id)
    {
		
		$post = Pelanggan::findOrFail($id);
		$post->Rekening = $request->Rekening;
		$post->Nama = $request->Nama;
		$post->Jumlah = $request->Jumlah;
        $post->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Data Customer Berhasil Diupdate');
    }


	public function destroy($id)
    {
		DB::table('pelanggans')->where('id', $id)->delete();
		return redirect('dashboard') ->with('data', 'berhasil dihapus!');
    }


	public function rekap(Request $request)
    {
		$month = $request->get('month');
		$rekap = Pelanggan::whereMonth('created_at', '=', $month)->get();
        return view('admin.rekap');
    }
}

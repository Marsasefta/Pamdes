<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;
use Carbon\Carbon;
use PDF;

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
		$rekaps = Pelanggan::get();

		if (request()->start_date || request()->end_date) {
			$start_date = Carbon::parse(request()->start_date)->toDateTimeString();
			$end_date = Carbon::parse(request()->end_date)->toDateTimeString();
			$rekaps = Pelanggan::whereBetween('tanggal',[$start_date,$end_date])->get();
		} else {
			$rekaps = Pelanggan::latest()->get();
		}
		
        return view('admin.rekap', ['rekaps' => $rekaps]);
    }

	public function cetak(Request $request)
	{
			$rekaps = pelanggan::all();
			$start_date = $request->start_date;
			$end_date =  $request->end_date;
			$rekaps = DB::table('pelanggans')->where('tanggal')->get();
			$pdf = PDF::loadview('admin.cetakrekap',['rekaps'=>$rekaps]);
    		return $pdf->stream();
		
			// $pdf = PDF::loadview('admin.cetakrekap',compact('rekaps','date'));
			// return $pdf->stream();
			// $rekaps = DB::table('pelanggans')->orderBy('created_at', 'asc')->where('tanggal', [$start_date,$end_date])->take(50)->get();
			// $pdf = PDF::loadview('admin.cetakrekap',compact('rekaps','date'));
			// return $pdf->stream();
			
		
			// $date = $request->date;
			// $rekaps = Pelanggan::all();
			
		
		// $date = $request->date
		// $rekaps = Pelanggan::
		
	}
	
}

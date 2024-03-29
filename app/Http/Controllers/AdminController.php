<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;
use Carbon\Carbon;
use PDF;
use Auth;
use App\User;
use App\users;

class AdminController extends Controller
{
    public function index(Pelanggan $posts, User $users)
    {
		// ->where('iduser', Auth::user()->id)->get()
		$posts = Pelanggan::with('user')->get();
		$users = User::all(); 
        return view('admin.dashboard', compact('posts','users'));
		
    }
	
    // method untuk insert data ke table
	public function store(Request $request)
	{
	// insert data ke table

	$table = Pelanggan::create([
		'Rekening' => $request->Rekening,
		'iduser' =>$request->iduser,
		'Alamat'=>$request->Alamat,
		'tanggal' => $request->tanggal,
		'Biaya' => $request->Biaya,
		'Administrasi' => $request->Administrasi,
		'Pemeliharaan' => $request->Pemeliharaan,
		'Denda' => $request->Denda,
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

	public function cetak($start_date,$end_date)
	{
		$rekaps = DB::table('pelanggans')->whereBetween('tanggal',[$start_date,$end_date])->get();
		$pdf = PDF::loadview('admin.cetakrekap',['rekaps'=>$rekaps]);
    	return $pdf->stream();
	}

	public function detail($id)
    {
		$post = Pelanggan::findOrFail($id);
        return view('detailuser', ['post' => $post]);
    }

	public function dataadmin()
    {
		$admins = User::get();
		return view('admin.dataadmin', compact('admins'));
    }

	public function adduser(Request $request)
    {
        $admins = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
			'confirmpass'=> $request->confirmpass,
            'role' => $request->role,
        ]);
		return redirect()->back();
    }

	public function delete($id)
    {
		DB::table('users')->where('id', $id)->delete();
		return redirect('dataadmin') ->with('data', 'berhasil dihapus!');
    }


	
}

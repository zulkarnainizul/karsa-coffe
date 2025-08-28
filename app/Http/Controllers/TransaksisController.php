<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Transaksi;
use App\Http\Requests\TransaksiRequest;

class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $transaksis= Transaksi::all();
        return view('transaksis.index', ['transaksis'=>$transaksis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('transaksis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TransaksiRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TransaksiRequest $request)
    {
        $transaksi = new Transaksi;
		$transaksi->nama_pelanggan = $request->input('nama_pelanggan');
		$transaksi->nama_menu = $request->input('nama_menu');
		$transaksi->tanggal_pembelian = $request->input('tanggal_pembelian');
		$transaksi->jumlah = $request->input('jumlah');
		$transaksi->total_bayar = $request->input('total_bayar');
		$transaksi->status_pembayaran = $request->input('status_pembayaran');
        $transaksi->save();

        return to_route('transaksis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksis.show',['transaksi'=>$transaksi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksis.edit',['transaksi'=>$transaksi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TransaksiRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TransaksiRequest $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
		$transaksi->nama_pelanggan = $request->input('nama_pelanggan');
		$transaksi->nama_menu = $request->input('nama_menu');
		$transaksi->tanggal_pembelian = $request->input('tanggal_pembelian');
		$transaksi->jumlah = $request->input('jumlah');
		$transaksi->total_bayar = $request->input('total_bayar');
		$transaksi->status_pembayaran = $request->input('status_pembayaran');
        $transaksi->save();

        return to_route('transaksis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return to_route('transaksis.index');
    }
}

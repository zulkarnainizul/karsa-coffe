<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Barang;
use App\Http\Requests\BarangRequest;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $barangs= Barang::all();
        return view('barangs.index', ['barangs'=>$barangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BarangRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BarangRequest $request)
    {
        $barang = new Barang;
		$barang->menu = $request->input('menu');
		$barang->harga = $request->input('harga');
		$barang->stock = $request->input('stock');
		$barang->deskripsi = $request->input('deskripsi');
        $barang->save();

        return to_route('barangs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.show',['barang'=>$barang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barangs.edit',['barang'=>$barang]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BarangRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BarangRequest $request, $id)
    {
        $barang = Barang::findOrFail($id);
		$barang->menu = $request->input('menu');
		$barang->harga = $request->input('harga');
		$barang->stock = $request->input('stock');
		$barang->deskripsi = $request->input('deskripsi');
        $barang->save();

        return to_route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return to_route('barangs.index');
    }
}

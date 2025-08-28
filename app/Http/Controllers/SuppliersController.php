<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Supplier;
use App\Http\Requests\SupplierRequest;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $suppliers= Supplier::all();
        return view('suppliers.index', ['suppliers'=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SupplierRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SupplierRequest $request)
    {
        $supplier = new Supplier;
		$supplier->nama = $request->input('nama');
		$supplier->username = $request->input('username');
		$supplier->password = $request->input('password');
		$supplier->alamat = $request->input('alamat');
		$supplier->no_hp = $request->input('no_hp');
        $supplier->save();

        return to_route('suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.show',['supplier'=>$supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit',['supplier'=>$supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SupplierRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SupplierRequest $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
		$supplier->nama = $request->input('nama');
		$supplier->username = $request->input('username');
		$supplier->password = $request->input('password');
		$supplier->alamat = $request->input('alamat');
		$supplier->no_hp = $request->input('no_hp');
        $supplier->save();

        return to_route('suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return to_route('suppliers.index');
    }
}

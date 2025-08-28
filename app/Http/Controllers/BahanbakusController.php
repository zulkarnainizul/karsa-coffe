<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Bahanbaku;
use App\Http\Requests\BahanbakuRequest;

class BahanbakusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $bahanbakus= Bahanbaku::all();
        return view('bahanbakus.index', ['bahanbakus'=>$bahanbakus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('bahanbakus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BahanbakuRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BahanbakuRequest $request)
    {
        $bahanbaku = new Bahanbaku;
		$bahanbaku->nama = $request->input('nama');
		$bahanbaku->stock = $request->input('stock');
		$bahanbaku->satuan = $request->input('satuan');
		$bahanbaku->supplier = $request->input('supplier');
        $bahanbaku->save();

        return to_route('bahanbakus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        return view('bahanbakus.show',['bahanbaku'=>$bahanbaku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        return view('bahanbakus.edit',['bahanbaku'=>$bahanbaku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BahanbakuRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BahanbakuRequest $request, $id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
		$bahanbaku->nama = $request->input('nama');
		$bahanbaku->stock = $request->input('stock');
		$bahanbaku->satuan = $request->input('satuan');
		$bahanbaku->supplier = $request->input('supplier');
        $bahanbaku->save();

        return to_route('bahanbakus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $bahanbaku = Bahanbaku::findOrFail($id);
        $bahanbaku->delete();

        return to_route('bahanbakus.index');
    }
}

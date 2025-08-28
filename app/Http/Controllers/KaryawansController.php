<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Karyawan;
use App\Http\Requests\KaryawanRequest;

class KaryawansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $karyawans= Karyawan::all();
        return view('karyawans.index', ['karyawans'=>$karyawans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  KaryawanRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(KaryawanRequest $request)
    {
        $karyawan = new Karyawan;
		$karyawan->nama = $request->input('nama');
		$karyawan->password = $request->input('password');
		$karyawan->no_hp = $request->input('no_hp');
		$karyawan->status = $request->input('status');
        $karyawan->save();

        return to_route('karyawans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.show',['karyawan'=>$karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.edit',['karyawan'=>$karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  KaryawanRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(KaryawanRequest $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
		$karyawan->nama = $request->input('nama');
		$karyawan->password = $request->input('password');
		$karyawan->no_hp = $request->input('no_hp');
		$karyawan->status = $request->input('status');
        $karyawan->save();

        return to_route('karyawans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return to_route('karyawans.index');
    }
}

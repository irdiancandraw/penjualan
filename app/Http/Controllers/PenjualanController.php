<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pembeli;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        $barang = Barang::all();
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan', 'barang', 'pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan= Penjualan::all();
        return view('penjualan.form',compact ('penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'barang' => 'required',
            'pembeli' => 'required',
            'jumlah'    => 'required|numeric',
            'harga_jual'     => 'required|numeric',
        ]);


        $penjualan = Penjualan::create([
            'barang' => $request->barang,
            'pembeli' => $request->pembeli,
            'jumlah' => $request->jumlah,
            'harga_jual' => $request->harga_jual
        ]);


        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::all();
        $pembeli = Pembeli::all();
        $penjualan = Penjualan::find($id);
        return view('penjualan.form', compact('penjualan', 'barang', 'pembeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $validate = $request->validate([
            'barang' => 'required',
            'pembeli' => 'required',
            'jumlah'    => 'required|numeric',
            'harga_jual'     => 'required|numeric',
        ]);


        $penjualan->update([
            'barang' => $request->barang_id,
            'pembeli' => $request->pembeli_id,
            'jumlah' => $request->jumlah,
            'harga_jual' => $request->harga_jual
        ]);
        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();

        return redirect('penjualan');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = Suplier::all();
        return view ('suplier.index',compact('suplier'));
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required|max:255',
            'telepon'=>'required|numeric',
            'alamat'=>'required'
        ]);
       $s = Suplier::create($request->all());
       return redirect('suplier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show(Suplier $suplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s = Suplier ::find($id);
        return view('suplier.form', compact('s'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suplier $suplier)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'telepon'=>'required|numeric',
            'alamat'=>'required',
        ]);
    
        $suplier->update([
            'nama'=>$request->nama,
            'telepon'=>$request->telepon,
            'alamat'=>$request->alamat,
        ]);
        return redirect('suplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = Suplier::find($id);
        $suplier ->delete();

        return redirect('suplier');
    }
    }

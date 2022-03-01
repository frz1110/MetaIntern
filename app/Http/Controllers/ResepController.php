<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Bahan;
use App\Models\Langkah;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use Auth;
use App\User;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep =  Resep::all();
        return view('dashboard', ['reseps' => $resep]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tulis-resep');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $resep = new Resep;
        
        $resep->nama = request('judul');
        $resep->deskripsi = request('desc');
        $resep->image_path = request('image');
        $resep->pembuat = Auth::user()->id;
        $resep->save();
        
        $bahan = new Bahan;
        $bahan->nama = request('bahan');
        $bahan->resep = $resep->id;
        $bahan->save();

        $langkah = new Langkah;
        $langkah->nama = request('langkah');
        $langkah->resep = $resep->id;
        $langkah->save();
        return redirect()->route('dashboard');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function show(Resep $resep)
    {
        return Resep::find($resep);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function edit(Resep $resep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resep $resep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resep $resep)
    {
        //
    }
}

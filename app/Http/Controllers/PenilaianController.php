<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penilaian;


class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPenilaian = Penilaian::all();
        return view('penilaian.data-penilaian', compact('dtPenilaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penilaian.create-penilaian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Penilaian::create([
            'nama' => $request->nama,
            'jenis_penilaian' => $request->jenis_penilaian,
            'tipe_penilaian' => $request->tipe_penilaian,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/penilaian')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peg = Penilaian::findorfail($id);
        return view('penilaian.edit-penilaian', compact('peg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peg = Penilaian::findorfail($id);
        $peg->update($request->all());

        return redirect('/penilaian')->with('toast_success', 'Data Berhasil Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Penilaian::findorfail($id);
        $peg->delete();
        return back();
    }
}

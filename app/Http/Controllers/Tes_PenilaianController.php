<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tes_penilaian;
use App\Models\nama_tes;
use App\Models\hasil_tes;
use App\Models\analisa;
use App\Models\point_tes;


class Tes_PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dttes_penilaian = tes_penilaian::with('nama_tes', 'hasil_tes', 'analisa', 'point_tes',)->latest()->paginate(6);
        return view('tes-penilaian.index', compact('dttes_penilaian'));
    }

    public function cetakTesPenilaian()
    {
        $dtcetaktes_penilaian = tes_penilaian::get();
        return view('tes-penilaian.cetak-tes-penilaian', compact('dtcetaktes_penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nam = nama_tes::all();
        $has = hasil_tes::all();
        $ana = analisa::all();
        $poi = point_tes::all();
        return view('tes-penilaian.create', compact('nam', 'has', 'ana', 'poi'));
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
        tes_penilaian::create([
            'nama_tes_id' => $request->nama_tes_id,
            'tanggal_test' => $request->tanggal_test,
            'hasil_tes_id' => $request->hasil_tes_id,
            'analisa_id' => $request->analisa_id,
            'point_tes_id' => $request->point_tes_id,
        ]);

        return redirect('/tes-penilaian')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $peg = tes_penilaian::findorfail($id);
        return view('tes-penilaian.edit', compact('peg'));
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
        $peg = tes_penilaian::findorfail($id);
        $peg->update($request->all());

        return redirect('/tes-penilaian')->with('toast_success', 'Data Berhasil Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = tes_penilaian::findorfail($id);
        $peg->delete();
        return back();
    }
}

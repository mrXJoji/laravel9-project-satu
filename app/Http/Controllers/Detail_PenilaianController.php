<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_penilaian;


class Detail_PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdetail_penilaian = detail_penilaian::all();
        return view('detail-penilaian.index', compact('dtdetail_penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detail-penilaian.create');
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
        detail_penilaian::create([
            'nama' => $request->nama,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'point' => $request->point,
            'keterangan_point' => $request->keterangan_point,
        ]);

        return redirect('/detail-penilaian')->with('toast_success', 'Data Berhasil Disimpan!');
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
        $peg = detail_penilaian::findorfail($id);
        return view('detail-penilaian.edit', compact('peg'));
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
        $peg = detail_penilaian::findorfail($id);
        $peg->update($request->all());

        return redirect('/detail-penilaian')->with('toast_success', 'Data Berhasil Di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = detail_penilaian::findorfail($id);
        $peg->delete();
        return back();
    }
}

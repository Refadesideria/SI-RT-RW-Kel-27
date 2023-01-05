<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Rt;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::with('rt')->get();
        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::all();
        return view('admin.kegiatan.create', compact('rt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
        ]);

        $kegiatan = new Kegiatan();
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->id_rt = $request->id_rt;
        $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan->save();

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kegiatan = Kegiatan::findOrfail($id);
        return view('admin.kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        $rt = Rt::all();
        return view('admin.kegiatan.edit', compact('kegiatan', 'rt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required',
        ]);

        $kegiatan = $kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->id_rt = $request->id_rt;
        $kegiatan->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan->save();

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect()
            ->route('kegiatan.index')
            ->with('success', 'Kegiatan berhasil dihapus!');
    }
}

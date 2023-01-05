<?php

namespace App\Http\Controllers;
use App\Models\Rt;
use App\Models\Ronda;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RondaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronda = Ronda::with('rt')->get();
        return view('admin.ronda.index', compact('ronda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::all();
        return view('admin.ronda.create', compact('rt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ronda = new Ronda();
        $ronda->id_rt = $request->id_rt;
        $ronda->bulan = $request->bulan;
        $ronda->minggu = $request->minggu;
        $ronda->save();

        return redirect()
            ->route('ronda.index')
            ->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ronda  $ronda
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ronda = Ronda::findOrfail($id);
        return view('admin.ronda.show', compact('ronda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ronda  $ronda
     * @return \Illuminate\Http\Response
     */
    public function edit(Ronda $ronda)
    {
        $rt = Rt::all();
        return view('admin.ronda.edit', compact('ronda', 'rt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ronda  $ronda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronda $ronda)
    {
        $validated = $request->validate([
            'bulan' => 'required',
            'minggu' => 'required',
        ]);

        $ronda = $ronda;
        $ronda->id_rt = $request->id_rt;
        $ronda->bulan = $request->bulan;
        $ronda->minggu = $request->minggu;
        $ronda->save();

        return redirect()->route('ronda.index')->with('success', 'Jadwal berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ronda  $ronda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ronda $ronda)
    {
        $ronda->delete();

        return redirect()
            ->route('ronda.index')
            ->with('success', 'Jadwal berhasil dihapus!');
    }
}

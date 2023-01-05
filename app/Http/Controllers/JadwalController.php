<?php

namespace App\Http\Controllers;
use App\Models\Rt;
use App\Models\Jadwal;
use App\Models\Ronda;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $jadwal = Jadwal::with('ronda')->get();
        $rt = Rt::where('id_user', auth()->user()->id)->get()[0];
        $jadwal = Ronda::where('id_rt', $rt->id)->get();

        // dd($jadwalRonda);

        return view('adminrt.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::where('id_user', auth()->user()->id)->get()[0];
        $jadwal = Ronda::where('id_rt', $rt->id)->get();
        $penduduk = Penduduk::all();

        return view('adminrt.jadwal.create', compact('jadwal', 'penduduk'));
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
            'id_penduduk' => 'required|unique:jadwals',
            'hari' => 'required',
            'id_ronda' => 'required',
        ]);

        Jadwal::create($validated);

        return redirect()
            ->route('jadwal.index')
            ->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function ronda(Ronda $ronda)
    {
        $jadwalSenin = $ronda->jadwal->filter(fn($value) => $value->hari === 'Senin');
        $jadwalSelasa = $ronda->jadwal->filter(fn($value) => $value->hari === 'Selasa');
        $jadwalRabu = $ronda->jadwal->filter(fn($value) => $value->hari === 'Rabu');
        $jadwalKamis = $ronda->jadwal->filter(fn($value) => $value->hari === 'Kamis');
        $jadwalJumat = $ronda->jadwal->filter(fn($value) => $value->hari === 'Jumat');
        $jadwalSabtu = $ronda->jadwal->filter(fn($value) => $value->hari === 'Sabtu');
        $jadwalMinggu = $ronda->jadwal->filter(fn($value) => $value->hari === 'Minggu');

        return view('adminrt.jadwal.ronda', compact('ronda', 'jadwalSenin', 'jadwalSelasa', 'jadwalRabu', 'jadwalKamis', 'jadwalJumat', 'jadwalSabtu', 'jadwalMinggu'));
    }

    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}

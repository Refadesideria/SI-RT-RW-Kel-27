<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::where('id_rt', auth()->user()->rt->id)->get();
        return view('adminrt.penduduk.index', ['penduduk' => $penduduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::all();
        return view('adminrt.penduduk.create', compact('rt'));
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
            'nik' => 'required|unique:penduduks|max:255',
            'nama' => 'required',
            'umur' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'status_nikah' => 'required',
            'Pendidikan' => 'required',
            'pekerjaan' => 'required',
            'gol_darah' => 'required',
            'foto' => 'required',
            'id_rt' => 'required',
        ]);

        $penduduk = new Penduduk();
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->umur = $request->umur;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jk = $request->jk;
        $penduduk->agama = $request->agama;
        $penduduk->status_nikah = $request->status_nikah;
        $penduduk->Pendidikan = $request->Pendidikan;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->gol_darah = $request->gol_darah;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $name = rand(1000, 9999) . $foto->getClientOriginalName();
            $foto->move('image/penduduk/', $name);
            $penduduk->foto = $name;
        }
        $penduduk->id_rt = $request->id_rt;
        $penduduk->save();

        return redirect()
            ->route('penduduk.index')
            ->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::findOrfail($id);
        return view('adminrt.penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        $rt = Rt::all();
        return view('adminrt.penduduk.edit', compact('penduduk', 'rt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        // $validated = $request->validate([
        //     'nik' => 'required',
        //     'nama' => 'required',
        //     'umur' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jk' => 'required',
        //     'agama' => 'required',
        //     'status_nikah' => 'required',
        //     'Pendidikan' => 'required',
        //     'pekerjaan' => 'required',
        //     'gol_darah' => 'required',
        //     'foto' => 'required',
        //     'id_rt' => 'required',
        // ]);

        $penduduk = $penduduk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->umur = $request->umur;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->jk = $request->jk;
        $penduduk->agama = $request->agama;
        $penduduk->status_nikah = $request->status_nikah;
        $penduduk->Pendidikan = $request->Pendidikan;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->gol_darah = $request->gol_darah;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $name = rand(1000, 9999) . $foto->getClientOriginalName();
            $foto->move('image/penduduk/', $name);
            $penduduk->foto = $name;
        }
        $penduduk->id_rt = $request->id_rt;
        $penduduk->save();

        return redirect()
            ->route('penduduk.index')
            ->with('success', 'Jadwal berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect()
            ->route('penduduk.index')
            ->with('success', 'Jadwal berhasil dihapus!');
    }
}

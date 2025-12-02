<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\barang;
use App\Models\Peminjam;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peminjamans = Peminjaman::with(["peminjams", "barangs"])->get();
        return view("peminjaman.index", compact("peminjamans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $barangs = barang::all();
        $peminjams = Peminjam::all();
        return view("peminjaman.create", compact("barangs", "peminjams"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'barang_id' => 'required',
            'peminjam_id' => 'required',
            'status' => 'required',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route("peminjaman.index")->with("success", 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $peminjamans = Peminjaman::findOrFail($id);
        $barangs = barang::all();
        $peminjams = Peminjam::all();
        return view('peminjaman.edit', compact('peminjamans', 'barangs', 'peminjams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $peminjamans = Peminjaman::findOrFail($id);
        $peminjamans->update($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $peminjamans = Peminjaman::findOrFail($id);

        $peminjamans->delete();

        return redirect()->route("peminjamans.dashboard")->with("success", "Data Berhasil Dihapus");
    }
}

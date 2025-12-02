<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\kategori;
use App\Models\Lab;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $barang = barang::with(['kategoris', 'peminjamans', 'lab'])->get();
        return view('barang.index', compact('barang'));
    }
    /**
     * tampil admin (dashboard)
     */
    public function dashboard()
    {
        //
        $barang = barang::with(['kategoris', 'peminjamans', 'lab'])->get();
        return view('barang.dashboard', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kategori = kategori::all();
        $lab = Lab::all();
        return view('barang.create', compact('kategori', 'lab'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_barang' => 'required',
            'kategori_id' => 'required',
            'jumlah' => 'required|numeric',
            'kondisi' => 'required',
            'lab_id' => 'required'
        ]);

        barang::create($request->all());
        return redirect()->route('barangs.dashboard')->with('success', 'barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $barang = barang::with('peminjamans')->findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $barang = barang::with(['kategoris', 'peminjamans', 'lab'])->findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $barang = barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('barangs.dashboard')->with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $barang = barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barangs.dashboard')->with('success', 'data berhasil dihapus');
    }
}

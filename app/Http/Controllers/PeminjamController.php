<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peminjams = Peminjam::all();
        return view("peminjam.index", compact("peminjams"));
    }

    public function dashboard()
    {
        //
        $peminjams = Peminjam::all();
        return view("peminjam.dashboard", compact("peminjams"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('peminjam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           "nama_peminjam" => "required", 
           "tipe_peminjam" => "required", 
        ]);
        Peminjam::create($request->all());
        return redirect()->route("peminjams.dashboard")->with("success", "Data Berhasil ditambahkan");
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
        $peminjams = Peminjam::findOrFail($id);
        return view('peminjam.edit', compact("peminjams"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $peminjams = Peminjam::findOrFail($id);
        $peminjams->update($request->all());

        return redirect()->route("peminjams.dashboard")->with("success", "Data Berhasil Diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $peminjams = Peminjam::findOrFail($id);
        $peminjams->delete();

        return redirect()->route("peminjams.dashboard")->with("success", "Data Berhasil Dihapus");
    }
}

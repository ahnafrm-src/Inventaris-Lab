<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $labs = Lab::all();
        return view('lab.index', compact('labs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('lab.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_lab' => 'required|unique:labs,nama_lab'
        ]);
        Lab::create($request->all());
        return redirect()->route('labs.index')->with('success', 'Lab berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $keyword = request()->query('search');
        
        $lab = Lab::findOrFail($id);
        if ($keyword) {
            $lab->barangs = $lab->barangs()->where('nama_barang', 'like', '%' . $keyword . '%')->get();
        } else {
            $lab->barangs = $lab->barangs;
        };
        return view('lab.show', compact('lab', 'keyword'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $lab = Lab::findOrFail($id);
        return view('lab.edit', compact('lab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_lab' => 'required|unique:labs,nama_lab,' . $id,
        ]);

        $lab = Lab::findOrFail($id);
        $lab->update($request->all());

        return redirect()->route('labs.index')->with('success', 'Lab berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $lab = Lab::findOrFail($id);
        $lab->delete();
        return redirect()->route('labs.index')->with('success', 'Lab berhasil dihapus');
    }
}

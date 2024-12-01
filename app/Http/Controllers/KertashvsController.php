<?php

namespace App\Http\Controllers;

use App\Models\Kertashvs;
use Illuminate\Http\Request;

class KertashvsController extends Controller
{
    public function index()
    {
        $kertashvs = Kertashvs::paginate(10);
        return view('kertashvs.index', compact('kertashvs'));
    }

    public function create()
    {
        return view('kertashvs.create');
    }

    public function store(Request $request)
    {
        Kertashvs::create($request->validate([
            'merk_kertashvs' => 'required|string|max:30',
            'stock_kertashvs' => 'required|integer',
            'tersedia' => 'required|in:Y,N'
        ]));

        return redirect()->route('kertashvs.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kertashvs = Kertashvs::findOrFail($id);
        return view('kertashvs.edit', compact('kertashvs'));
    }

    public function update(Request $request, $id)
    {
        $kertashvs = Kertashvs::findOrFail($id);
        $kertashvs->update($request->validate([
            'merk_kertashvs' => 'required|string|max:30',
            'stock_kertashvs' => 'required|integer',
            'tersedia' => 'required|in:Y,N'
        ]));

        return redirect()->route('kertashvs.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        $kertashvs = Kertashvs::findOrFail($id);
        $kertashvs->delete();

        return redirect()->route('kertashvs.index')->with('success', 'Data berhasil dihapus!');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kertashvs = Kertashvs::where('merk_kertashvs', 'like', "%$cari%")->paginate(10);

        return view('kertashvs.index', compact('kertashvs'));
    }
}

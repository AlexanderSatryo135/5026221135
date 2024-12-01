<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KertashvsController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel kertashvs dengan pagination 10
        $kertashvs = DB::table('kertashvs')->paginate(10);

        // Mengirim data ke view index
        return view('kertashvs.index', ['kertashvs' => $kertashvs]);
    }

    public function tambah()
    {
        // Menampilkan form tambah data kertashvs
        return view('kertashvs.tambah');
    }

    public function store(Request $request)
    {
        // Menyimpan data baru ke tabel kertashvs
        DB::table('kertashvs')->insert([
            'merk_kertashvs' => $request->merk_kertashvs,
            'stock_kertashvs' => $request->stock_kertashvs,
            'tersedia' => $request->tersedia,
        ]);

        // Alihkan halaman ke halaman index kertashvs
        return redirect('/kertashvs');
    }

    public function edit($id)
    {
        // Mengambil data kertashvs berdasarkan id
        $kertashvs = DB::table('kertashvs')->where('kode_kertashvs', $id)->get();

        // Mengirim data ke view edit
        return view('kertashvs.edit', ['kertashvs' => $kertashvs]);
    }

    public function update(Request $request, $id)
    {
        // Update data kertashvs berdasarkan id
        DB::table('kertashvs')->where('kode_kertashvs', $id)->update([
            'merk_kertashvs' => $request->merk_kertashvs,
            'stock_kertashvs' => $request->stock_kertashvs,
            'tersedia' => $request->tersedia,
        ]);

        // Alihkan halaman ke halaman index kertashvs
        return redirect('/kertashvs');
    }

    public function hapus($id)
    {
        // Hapus data kertashvs berdasarkan id
        DB::table('kertashvs')->where('kode_kertashvs', $id)->delete();

        // Alihkan halaman ke halaman index kertashvs
        return redirect('/kertashvs');
    }

    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data sesuai pencarian
        $kertashvs = DB::table('kertashvs')
            ->where('merk_kertashvs', 'like', "%" . $cari . "%")
            ->paginate();

        // Mengirim data ke view index
        return view('kertashvs.index', ['kertashvs' => $kertashvs]);
    }
}

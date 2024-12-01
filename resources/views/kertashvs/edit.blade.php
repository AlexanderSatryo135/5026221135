@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>{{ isset($kertashvs) ? 'Edit Data' : 'Tambah Data' }}</h1>

    <form action="{{ isset($kertashvs) ? route('kertashvs.update', $kertashvs->kode_kertashvs) : route('kertashvs.store') }}" method="POST">
        @csrf
        @if(isset($kertashvs))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="merk_kertashvs">Merk Kertas</label>
            <input type="text" name="merk_kertashvs" class="form-control" value="{{ $kertashvs->merk_kertashvs ?? old('merk_kertashvs') }}" required>
        </div>
        <div class="form-group">
            <label for="stock_kertashvs">Stok</label>
            <input type="number" name="stock_kertashvs" class="form-control" value="{{ $kertashvs->stock_kertashvs ?? old('stock_kertashvs') }}" required>
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia</label>
            <select name="tersedia" class="form-control" required>
                <option value="Y" {{ (isset($kertashvs) && $kertashvs->tersedia == 'Y') ? 'selected' : '' }}>Ya</option>
                <option value="N" {{ (isset($kertashvs) && $kertashvs->tersedia == 'N') ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

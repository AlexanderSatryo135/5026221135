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
            <label for="merk_kertashvs">Merk Kertas HVS</label>
            <input type="text" name="merk_kertashvs" class="form-control" id="merk_kertashvs"
                value="{{ $kertashvs->merk_kertashvs ?? old('merk_kertashvs') }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="stock_kertashvs">Stok</label>
            <input type="number" name="stock_kertashvs" class="form-control" id="stock_kertashvs"
                value="{{ $kertashvs->stock_kertashvs ?? old('stock_kertashvs') }}" required>
        </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="tersedia" name="tersedia" value="Y"
                    {{ (isset($kertashvs) && $kertashvs->tersedia == 'Y') ? 'checked' : '' }}>
                <label class="form-check-label" for="tersedia">Tersedia</label>
            </div>
        </div>

        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('kertashvs.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection

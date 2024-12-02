@extends('layouts.layout')

@section('content')
<div class="container">
    <h3>Tambah Data Kertas HVS</h3>
    <form action="{{ route('kertashvs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="merk_kertashvs">Merk Kertas</label>
            <input type="text" name="merk_kertashvs" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="stock_kertashvs">Stok</label>
            <input type="number" name="stock_kertashvs" class="form-control" required>
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="tersedia" name="tersedia" value="Y"
                {{ (isset($kertashvs) && $kertashvs->tersedia == 'Y') ? 'checked' : '' }}>
            <label class="form-check-label" for="tersedia">Tersedia</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

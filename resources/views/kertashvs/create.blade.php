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
        <div class="form-group">
            <label for="tersedia">Tersedia</label>
            <select name="tersedia" class="form-control" required>
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

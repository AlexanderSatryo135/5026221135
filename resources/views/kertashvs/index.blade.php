@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

            <h2 class="text-center">Data Kertas HVS</h2>

            <!-- Form Pencarian -->
            <form action="{{ route('kertashvs.index') }}" method="GET" class="form-inline mb-3">
                <input class="form-control" type="text" name="cari" placeholder="Cari Kertas HVS .." value="{{ request('cari') }}">
                <button class="btn btn-primary ml-2" type="submit">Cari</button>
            </form>

            <!-- Tombol Tambah Data -->
            <a href="{{ route('kertashvs.create') }}" class="btn btn-success mb-3">Tambah Data</a>

            <!-- Tabel Data -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Stok</th>
                        <th>Tersedia</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kertashvs as $k)
                    <tr>
                        <td>{{ $k->merk_kertashvs }}</td>
                        <td>{{ $k->stock_kertashvs }}</td>
                        <td>{{ $k->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('kertashvs.edit', $k->kode_kertashvs) }}">Edit</a>
                            <form action="{{ route('kertashvs.destroy', $k->kode_kertashvs) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Data tidak ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-3">
                {{ $kertashvs->links() }}
            </div>

            <!-- Info Pagination -->
            <div class="mt-2">
                Halaman: {{ $kertashvs->currentPage() }} <br>
                Jumlah Data: {{ $kertashvs->total() }} <br>
                Data Per Halaman: {{ $kertashvs->perPage() }}
            </div>

        </div>
    </div>
</div>
@endsection

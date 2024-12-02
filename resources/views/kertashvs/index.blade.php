@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

            <h2 class="text-center">Data Kertas HVS</h2>

            <!-- Form Pencarian -->
            <form action="{{ route('kertashvs.index') }}" method="GET" class="form-inline mb-3">
                <div class="row">
                    <div class="col-md-8">
                        <input
                            type="text"
                            name="cari"
                            class="form-control w-100"
                            placeholder="Cari Kertas HVS .."
                            value="{{ request('cari') }}">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary w-100">Cari</button>
                    </div>
                </div>
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
                                <a href="{{ route('kertashvs.edit', $k->kode_kertashvs) }}" class="btn btn-info">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                |
                                <form action="{{ route('kertashvs.destroy', $k->kode_kertashvs) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Hapus data?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
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
                {{ $kertashvs->links('pagination::bootstrap-4') }}
            </div>

            <!-- Info Pagination -->
            <div class="mt-2">
                <p>Halaman: {{ $kertashvs->currentPage() }}</p>
                <p>Jumlah Data: {{ $kertashvs->total() }}</p>
                <p>Data Per Halaman: {{ $kertashvs->perPage() }}</p>
            </div>

        </div>
    </div>
</div>
@endsection

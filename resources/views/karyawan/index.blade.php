<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Karyawan</h2>

        <!-- Link to add new data -->
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <!-- Display Success Message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Table to Display Karyawan Data -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawan as $data)
                    <tr>
                        <td>{{ $data->kodepegawai }}</td>
                        <td>{{ strtoupper($data->namalengkap) }}</td>
                        <td>{{ $data->divisi }}</td>
                        <td>{{ $data->departemen }}</td>
                        <td>
                            <!-- Form to delete data -->
                            <form action="{{ route('karyawan.destroy', $data->kodepegawai) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

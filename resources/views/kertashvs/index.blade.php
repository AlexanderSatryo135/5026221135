<!DOCTYPE html>
<html>
<head>
	<title>Data Kertas HVS</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center">Data Kertas HVS</h2>

				<h3>Daftar Kertas HVS</h3>

				<p>Cari Data Kertas HVS:</p>

				<div class="form-group">
				</div>
				<form action="/kertashvs/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Merk Kertas HVS .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Merk</th>
						<th>Stok</th>
						<th>Tersedia</th>
						<th>Opsi</th>
					</tr>
					@foreach($kertashvs as $k)
					<tr>
						<td>{{ $k->merk_kertashvs }}</td>
						<td>{{ $k->stock_kertashvs }}</td>
						<td>{{ $k->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/kertashvs/edit/{{ $k->kode_kertashvs }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/kertashvs/hapus/{{ $k->kode_kertashvs }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $kertashvs->currentPage() }} <br/>
				Jumlah Data : {{ $kertashvs->total() }} <br/>
				Data Per Halaman : {{ $kertashvs->perPage() }} <br/>
				<br/>

				{{ $kertashvs->links() }}
			</div>
		</div>
	</div>

</body>
</html>

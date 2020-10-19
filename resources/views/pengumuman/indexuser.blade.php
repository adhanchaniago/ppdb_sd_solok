<!DOCTYPE html>
<html>
<head>
	@include('header')
	<title>Tabel Pengumuman </title>
</head>
<body>
	@include('navbar')
	<section class="page-section mt-4 bg-primary">
		<div class="container bg-white p-5 rounded-lg">
			<h4 class="text-center">Hasil Pencarian</h4>
			<a href="/pengumuman/cetak/{{$keyword}}" class="btn btn-danger btn-lg float-right mb-2"> Cetak / Print</a>
			<br>
			<table class="table">
				<thead>
					<tr>
						<th>Nama Sekolah</th>
						<th>No Pendaftaran</th>
						<th>Nama Siswa</th>
<<<<<<< HEAD
						<th>Umur (Tahun)</th>
						<th>Jarak Rumah ke Sekolah</th>
=======
						<th>Umur</th>
						<th>Jarak rumah ke sekolah</th>
>>>>>>> 6b3d0f026526f3447a71020d1f602fdef8fbe535
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pengumuman as $p)
					<tr>
						<td>{{ $p->nama_sekolah }}</td>
						<td>{{ $p->no_pendaftaran }}</td>
						<td>{{ $p->nama_siswa}}</td>
						<td>{{ $p->umur}}</td>
						<td>{{ $p->jarak}}</td>
						<td>{{ $p->status}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
	@include('footer')
</body>
</html>
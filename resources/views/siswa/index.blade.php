@extends('template')
@section('judul_halaman','')
@section('konten')
<h2>Daftar Nama Siswa</h2>
<body style="background: lightgray">
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow rounded">
<div class="card-body">
<a href="{{ route('siswa.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">Nis </th>
<th scope="col">Nama Siswa</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col">Tanggal Lahir</th>
<th scope="col">kelas</th>
<th scope="col">jurusan</th>
<th scope="col">alamat</th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
@forelse ($siswas as $siswa)
<tr>
<td class="text-center">{{ $siswa->nis }}</td>
<td class="text-center">{{ $siswa->nama_siswa }}</td>
<td class="text-center">{{ $siswa->jk }}</td>
<td class="text-center">{{ $siswa->tgllahir }}</td>
<td class="text-center">{{ $siswa->kelas }}</td>
<td class="text-center">{{ $siswa->jurusan }}</td>
<td class="text-center">{{ $siswa->alamat }}</td>


<td class="text-center">
<form onsubmit="return confirm('Apakah Anda Yakin?');" action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
<a href="{{ route('siswa.edit', $siswa->id) }}"
class="btn btn-sm btn-primary">EDIT</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
</form>
</td>
</tr>
@empty
<div class="alert alert-danger">
Data Blog belum Tersedia.
</div>
@endforelse
</tbody>
</table>
{{ $siswas->links() }}
</div>
</div>
</div>
</div>
</div>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<script
src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
//message with toastr
@if(session()-> has('success'))
toastr.success('{{ session('success') }}', 'BERHASIL!');
@elseif(session()-> has('error'))
toastr.error('{{ session('error') }}', 'GAGAL!');
@endif
</script>
@endsection
@extends('template')
@section('judul_halaman','')
@section('konten')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('guru.update', $guru->id) }}" 
                        method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT') 
                        <div class="form-group">
                            <label class="font-weight-bold"> NIS </label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis', $guru->nis) }}" placeholder="Masukkan Nis Siswa">
                            @error('nis')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> Nama </label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $guru->nama) }}" placeholder="Masukkan Nama ">
                            @error('nama')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> JENIS KELAMIN</label>
                            <input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk" value="{{ old('jk', $guru->jk) }}" placeholder="Masukkan Jenis Kelamin">
                            @error('jk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> Mapel</label>
                            <input type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel" value="{{ old('mapel', $guru->mapel) }}" placeholder="Masukkan mapel">
                            @error('mapel')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold"> Telepon</label>
                            <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp', $guru->telp) }}" placeholder="Masukkan telp">
                            @error('telp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                    <div class="form-group">
                            <label class="font-weight-bold"> ALAMAT</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $guru->alamat) }}" placeholder="Masukkan Alamat Siswa">
                            @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </form> 
            </div>
        </div>
    </div>
</div>
</div>
                
@endsection

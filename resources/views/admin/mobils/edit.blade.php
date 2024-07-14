@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Form Edit Data
        </div>
        <div class="card-body">
            <form action="{{ route('mobils.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama "
                        value="{{ old('nama') }}" wire:model="nama" wire:keyup="generateSlug" />
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control" placeholder="Masukan slug "
                        value="{{ old('slug') }}" />
                </div>
             
                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <input type="text" name="prestasi" class="form-control" placeholder="Masukan Prestasi"
                        value="{{ old('prestasi') }}" />
                </div>
                <div class="form-group">
                    <label for="pengalaman">Pengalaman</label>
                    <input type="number" name="pengalaman" class="form-control" placeholder="Masukan Pengalaman"
                        value="{{ old('pengalaman') }}" />
                </div>
                <div class="form-group">
                    <label for="metode">Metode</label>
                    <input type="text" name="metode" class="form-control" placeholder="Masukan metode"
                        value="{{ old('metode') }}" />
                </div>
                <div class="form-group">
                    <label for="taktis">Taktis</label>
                    <input type="text" name="taktis" class="form-control" placeholder="Masukan Taktis"
                        value="{{ old('taktis') }}" />
                </div>
                <div class="form-group">
                    <label for="kepemimpinan">kepemimpinan</label>
                    <input type="text" name="kepemimpinan" class="form-control" placeholder="Masukan kepemimpinan"
                        value="{{ old('kepemimpinan') }}" />
                </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection

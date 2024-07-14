@extends('layouts.admin')

@section('content')
    <div class="row">
        <style>
            nav svg {
                height: 20px;
                ;
            }

            nav.hidden {
                display: block;
            }

            th {
                font-size: 0.875em;
            }
        </style>
        <div class="col-md">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Daftar pelatih</h3>
                    <a href="{{route('mobils.create')}}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    {{-- @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif --}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Prestasi</th>
                                <th>Pengalaman</th>
                                <th>Metode</th>
                                <th>Taktis</th>
                                <th>Kepimpinan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mobils as $mobil)
                                <tr>
                                  
                                    <td>{{ $mobil->nama }}</td>
                                    <td>{{ $mobil->prestasi }}</td>
                                    <td>{{ $mobil->pengalaman }}</td>
                                    <td>{{ $mobil->metode }}</td>
                                    <td>{{ $mobil->taktis }}</td>
                                    <td>{{ $mobil->kepemimpinan }}</td>
                                    
                                 
                                    
                                    <td>
                                        <a href="{{route('mobils.edit', $mobil->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                        <form onclick="return confirm('anda yakin data dihapus?');"
                                        class="d-inline" action="{{route('mobils.destroy',$mobil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="14" class="text-center">data kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $mobils->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th> <!-- Kolom nomor urut -->
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                // Adjust the starting number based on the current page and per-page item count
                                $i = ($mahasiswas->currentPage() - 1) * $mahasiswas->perPage() + 1;
                            @endphp
                            @foreach($mahasiswas as $s)
                            <tr>
                                <td>{{ $i++ }}</td> 
                                <td>{{ $s->nim }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->tempat_lahir }}</td>
                                <td>{{ $s->tanggal_lahir }}</td>
                                <td>
                                    <a href="{{ route('mahasiswa.show', ['mahasiswa' => $s->id, 'no' => ($mahasiswas->currentPage() - 1) * $mahasiswas->perPage() + $loop->iteration]) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('mahasiswa.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                                    
                                    <form action="{{ route('mahasiswa.destroy', $s->id) }}" method="POST" style="display: inline-block;" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data mahasiswa ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $mahasiswas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

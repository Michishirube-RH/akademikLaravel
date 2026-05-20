@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('content')

<div class="container mt-2">

    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <h2 class="text-primary fw-bold m-0"><i class="bi bi-people-fill me-2"></i>Daftar Mahasiswa Jurusan TI</h2>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-lg me-1"></i> Tambah Mahasiswa
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle mb-0">
                    <thead class="table-primary text-center">
                        <tr>
                            <th class="py-3">No</th>
                            <th class="py-3">NIM</th>
                            <th class="py-3">Nama</th>
                            <th class="py-3">Tempat Lahir</th>
                            <th class="py-3">Tanggal Lahir</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Prodi</th>
                            <th class="py-3">Alamat</th>
                            <th class="py-3" width="220">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $item)
                            <tr>
                                <td class="text-center fw-bold text-muted">{{ $loop->iteration + ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() }}</td>
                                <td><span class="badge bg-secondary">{{ $item->nim }}</span></td>
                                <td class="fw-semibold">{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tgl_lahir)->format('d M Y') }}</td>
                                <td><a href="mailto:{{ $item->email }}" class="text-decoration-none">{{ $item->email }}</a></td>
                                <td><span class="badge bg-info text-dark">{{ $item->prodi }}</span></td>
                                <td><small class="text-muted">{{ $item->alamat }}</small></td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm" role="group">
                                        <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-outline-info btn-sm" title="Lihat Detail">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-outline-warning btn-sm" title="Edit Data">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Hapus data mahasiswa ini?');">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-outline-danger btn-sm" style="border-top-left-radius: 0; border-bottom-left-radius: 0;" title="Hapus Data">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center py-4 text-muted">
                                    <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                                    Tidak ada data mahasiswa.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $mahasiswa->links() }}
            </div>
        </div>
    </div>

</div>

@endsection
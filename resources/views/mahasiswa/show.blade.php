@extends('layouts.main')

@section('title', 'Detail Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="card shadow">
        
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Detail Data Mahasiswa</h4>
        </div>

        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped m-0">
                    <tbody>
                        <tr>
                            <th class="w-25">NIM</th>
                            <td>{{ $mahasiswa->nim }}</td>
                        </tr>
                        <tr>
                            <th class="w-25">Nama Lengkap</th>
                            <td>{{ $mahasiswa->nama_lengkap }}</td>
                        </tr>
                        <tr>
                            <th class="w-25">Tempat Lahir</th>
                            <td>{{ $mahasiswa->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <th class="w-25">Tanggal Lahir</th>
                            <td>
                                @if($mahasiswa->tgl_lahir)
                                    {{ \Carbon\Carbon::parse($mahasiswa->tgl_lahir)->format('d F Y') }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="w-25">Email</th>
                            <td>{{ $mahasiswa->email }}</td>
                        </tr>
                        <tr>
                            <th class="w-25">Program Studi</th>
                            <td>{{ $mahasiswa->prodi }}</td>
                        </tr>
                        <tr>
                            <th class="w-25">Alamat</th>
                            <td>{{ $mahasiswa->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</div>

@endsection

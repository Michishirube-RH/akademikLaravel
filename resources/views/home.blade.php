@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container-fluid py-4">

    <!-- Hero Section -->
    <div class="p-5 mb-5 bg-dark text-white rounded-4 shadow-lg position-relative overflow-hidden" 
         style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
        <div class="container-fluid py-5 text-center position-relative z-1">
            <h1 class="display-3 fw-bold mb-3 text-white">Sistem Informasi Akademik</h1>
            <p class="col-md-8 mx-auto fs-4 fw-light text-white-50 mb-5">
                Pengalaman manajemen data akademik yang efisien, modern, dan intuitif. Dirancang khusus untuk mengelola data dengan cepat dan aman.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-light btn-lg px-5 rounded-pill shadow fw-bold text-primary">
                    <i class="bi bi-people-fill me-2"></i>Kelola Mahasiswa
                </a>
                <a href="{{ route('dosen.index') }}" class="btn btn-outline-light btn-lg px-5 rounded-pill shadow-sm fw-bold">
                    <i class="bi bi-person-workspace me-2"></i>Kelola Dosen
                </a>
            </div>
        </div>
        <!-- Decorative Background Icons -->
        <i class="bi bi-mortarboard position-absolute text-white" style="font-size: 15rem; bottom: -2rem; right: -2rem; opacity: 0.1; transform: rotate(-15deg);"></i>
        <i class="bi bi-book position-absolute text-white" style="font-size: 10rem; top: 1rem; left: 2rem; opacity: 0.1; transform: rotate(15deg);"></i>
    </div>

    <!-- Highlighted Features -->
    <div class="container px-4 py-3">
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            
            <div class="col d-flex align-items-start">
                <div class="icon-square text-bg-primary d-inline-flex align-items-center justify-content-center fs-1 flex-shrink-0 me-4 rounded-3 shadow" style="width: 4rem; height: 4rem;">
                    <i class="bi bi-database-check"></i>
                </div>
                <div>
                    <h3 class="fs-4 fw-bold">Manajemen Terpusat</h3>
                    <p class="text-muted">Kelola seluruh data mahasiswa dan dosen dalam satu platform terintegrasi dengan akses yang mudah dan cepat.</p>
                </div>
            </div>
            
            <div class="col d-flex align-items-start">
                <div class="icon-square text-bg-success d-inline-flex align-items-center justify-content-center fs-1 flex-shrink-0 me-4 rounded-3 shadow" style="width: 4rem; height: 4rem;">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <div>
                    <h3 class="fs-4 fw-bold">Keamanan Data</h3>
                    <p class="text-muted">Dibangun menggunakan framework Laravel yang tangguh, menjamin perlindungan dari berbagai kerentanan keamanan.</p>
                </div>
            </div>
            
            <div class="col d-flex align-items-start">
                <div class="icon-square text-bg-warning text-dark d-inline-flex align-items-center justify-content-center fs-1 flex-shrink-0 me-4 rounded-3 shadow" style="width: 4rem; height: 4rem;">
                    <i class="bi bi-laptop"></i>
                </div>
                <div>
                    <h3 class="fs-4 fw-bold">Desain Responsif</h3>
                    <p class="text-muted">Tampilan modern dengan Bootstrap 5 yang menyesuaikan dengan sempurna di berbagai ukuran layar perangkat Anda.</p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Call to Action / Info -->
    <div class="container my-4">
        <div class="row align-items-md-stretch g-4">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-4 shadow-sm border border-secondary">
                    <h2 class="fw-bold">Arsitektur MVC</h2>
                    <p class="text-white-50 mt-3 fs-5">
                        Pemisahan logika bisnis dan tampilan secara rapi menggunakan konsep Model-View-Controller. Memudahkan pengembangan sistem secara berkelanjutan.
                    </p>
                    <div class="mt-4">
                        <span class="badge bg-secondary fs-6 rounded-pill px-3 py-2 me-2 mb-2">Laravel Framework</span>
                        <span class="badge bg-secondary fs-6 rounded-pill px-3 py-2 mb-2">PHP 8+</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light rounded-4 shadow-sm border border-light-subtle">
                    <h2 class="fw-bold text-dark">Dukungan Teknologi</h2>
                    <p class="text-muted mt-3 fs-5">
                        Menggunakan teknologi basis data relasional (SQL) terbaru yang memberikan performa dan integritas data terbaik untuk sistem akademik.
                    </p>
                    <div class="mt-4">
                        <span class="badge text-bg-primary fs-6 rounded-pill px-3 py-2 me-2 mb-2">MySQL / PostgreSQL</span>
                        <span class="badge text-bg-primary fs-6 rounded-pill px-3 py-2 mb-2">Query Builder</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
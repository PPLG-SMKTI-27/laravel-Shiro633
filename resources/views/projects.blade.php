@extends('layouts.main')

@section('title', 'Proyek Saya - Aditya Nurkhalid Indrawan')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
    <header>
        <h1>Proyek Saya</h1>
        <p>Kumpulan proyek web yang telah saya buat</   p>
        <a href="/" class="back-button">← Kembali ke Beranda</a>
    </header>

    
    <div class="container">
        <h2>Proyek Unggulan</h2>
        <div class="projects-grid">
            
            <div class="project-card">
                <div class="project-image">💼</div>
                <div class="project-info">
                    <h3>Aplikasi Manajemen Task</h3>
                    <p>Aplikasi web untuk mengelola tugas sehari-hari dengan fitur reminder dan deadline tracking.</p>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>

        
            <div class="project-card">
                <div class="project-image">📊</div>
                <div class="project-info">
                    <h3>Dashboard Analytics</h3>
                    <p>Sistem dashboard untuk visualisasi data dengan grafik interaktif dan laporan real-time.</p>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Chart.js</span>
                    </div>
                </div>
            </div>

          
            <div class="project-card">
                <div class="project-image">🛒</div>
                <div class="project-info">
                    <h3>Platform E-Commerce</h3>
                    <p>Toko online lengkap dengan sistem pembayaran, katalog produk, dan manajemen pesanan.</p>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Payment API</span>
                        <span class="tech-tag">Responsive</span>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-image">📱</div>
                <div class="project-info">
                    <h3>Aplikasi Chat Real-Time</h3>
                    <p>Aplikasi chatting dengan fitur notifikasi real-time dan enkripsi pesan dasar.</p>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">WebSocket</span>
                        <span class="tech-tag">Vue.js</span>
                    </div>
                </div>
            </div>

          
            <div class="project-card">
                <div class="project-image">🎓</div>
                <div class="project-info">
                    <h3>Sistem Manajemen Sekolah</h3>
                    <p>Platform untuk manajemen data siswa, nilai, dan jadwal sekolah secara terintegrasi.</p>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PostgreSQL</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                </div>
            </div>

         
            <div class="project-card">
                <div class="project-image">🍕</div>
                <div class="project-info">
                    <h3>Aplikasi Pesan Makanan</h3>
                    <p>Aplikasi food delivery dengan tracking pesanan dan integrasi map untuk lokasi pengiriman.</p>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Google Maps API</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    <footer>
        <p>&copy; 2026 Aditya Nurkhalid Indrawan. Semua hak dilindungi.</p>
    </footer>
@endsection


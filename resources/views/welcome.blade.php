@extends('layouts.main')

@section('title', 'Beranda - Aditya Nurkhalid Indrawan')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
    <header>
        <div class="profile-section">
            <div class="profile-frame">
                <img src="/karbit.jpg" alt="Aditya Nurkhalid Indrawan">
            </div>
        </div>
        <h1><span>{{$nama}}</span></h1>
        <p>Pengembang Web | Spesialis Laravel & Full-Stack</p>
        <div class="social-links">
            <a href="#contact">Hubungi Saya</a>
            <a href="/projects">Karya Saya</a>
        </div>
    </header>

 
    <section class="about-section">
        <h2>Tentang Saya</h2>
        <div class="about-content">
            <p>
                Halo! Saya adalah pengembang web yang bersemangat dengan spesialisasi dalam membangun aplikasi web yang modern dan scalable menggunakan Laravel dan teknologi terkini. 
                Dengan fokus pada kode yang bersih dan desain yang berpusat pada pengguna, saya menciptakan solusi web yang berdampak nyata. Saya terus belajar dan mengeksplorasi 
                teknologi baru untuk memberikan hasil terbaik bagi klien dan proyek saya.
            </p>
        </div>
    </section>

   
    <section class="skills-section">
        <h2>Keterampilan & Teknologi</h2>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">🚀</div>
                <h3>Pengembangan Backend</h3>
                <p>Laravel, PHP, Desain Database</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">💻</div>
                <h3>Pengembangan Frontend</h3>
                <p>JavaScript, Vue.js, Blade Templates</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🗄️</div>
                <h3>Basis Data</h3>
                <p>MySQL, PostgreSQL, Optimasi Query</p>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🔧</div>
                <h3>Alat & Sistem</h3>
                <p>Git, REST APIs, Linux/Windows</p>
            </div>
        </div>
    </section>


    <section class="projects-section" id="projects">
        <h2>Proyek Unggulan</h2>
        <div class="projects-grid">
            @foreach($projects as $project)
            <div class="project-card">
                <div class="project-placeholder">{{ $project['icon'] }}</div>
                <div class="project-content">
                    <h3><span>{{ $project['title'] }}</span></h3>
                    <p>{{ $project['description'] }}</p>
                    <div class="project-tags">
                        @foreach($project['tags'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    
    <section class="contact-section" id="contact">
        <h2>Hubungi Saya</h2>
        <div class="contact-content">
            <p style="font-size: 1.2em; color: #333; margin-bottom: 30px;">
                Saya senang mendengar dari Anda! Baik Anda memiliki proyek dalam pikiran atau hanya ingin mengucapkan halo, silakan hubungi saya.
            </p>
            <div class="contact-info">
                📧 <a href="mailto:aniindrawan08@gmail.com">aniindrawan08@gmail.com</a>
            </div>
            <div class="contact-info">
                 <a href="http://github.com/Shiro633" target="_blank">Profil GitHub</a>
            </div>
            <a href="mailto:aniindrawan08@gmail.com" class="cta-button">Kirim Email</a>
        </div>
    </section>


    <footer>
        <p>&copy; 2026 Aditya Nurkhalid Indrawan. Semua hak dilindungi.</p>
    </footer>
@endsection

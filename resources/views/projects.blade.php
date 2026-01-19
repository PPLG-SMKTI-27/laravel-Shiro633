<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Saya - Aditya Nurkhalid Indrawan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        header p {
            font-size: 1.1em;
            opacity: 0.95;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background: #f0f0f0;
            transform: translateY(-2px);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        h2 {
            font-size: 2em;
            color: #667eea;
            margin-bottom: 40px;
            text-align: center;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.25);
        }

        .project-image {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4em;
        }

        .project-info {
            padding: 25px;
        }

        .project-info h3 {
            color: #667eea;
            font-size: 1.3em;
            margin-bottom: 12px;
        }

        .project-info p {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95em;
        }

        .tech-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .tech-tag {
            background: #f0f0f0;
            color: #667eea;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 60px;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8em;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Proyek Saya</h1>
        <p>Kumpulan proyek web yang telah saya buat</   p>
        <a href="/" class="back-button">← Kembali ke Beranda</a>
    </header>

    <!-- Projects Container -->
    <div class="container">
        <h2>Proyek Unggulan</h2>
        <div class="projects-grid">
            <!-- Project 1 -->
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

            <!-- Project 2 -->
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

            <!-- Project 3 -->
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

            <!-- Project 4 -->
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

            <!-- Project 5 -->
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

            <!-- Project 6 -->
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

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Aditya Nurkhalid Indrawan. Semua hak dilindungi.</p>
    </footer>
</body>
</html>

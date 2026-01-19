<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aditya Nurkhalid Indrawan - Portfolio Pengembang Web</title>
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
            padding: 80px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        header p {
            font-size: 1.3em;
            opacity: 0.95;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 25px;
        }

        .social-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 16px;
            border: 2px solid white;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: white;
            color: #667eea;
            transform: translateY(-3px);
        }

        section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        section h2 {
            font-size: 2.2em;
            margin-bottom: 40px;
            color: #667eea;
            text-align: center;
            position: relative;
        }

        section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: #667eea;
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .about-content {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            font-size: 1.1em;
            line-height: 1.8;
            color: #555;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .skill-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: all 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }

        .skill-icon {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .skill-card h3 {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 10px;
        }

        .skill-card p {
            color: #666;
            font-size: 0.95em;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 30px;
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

        .project-placeholder {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3em;
        }

        .project-content {
            padding: 25px;
        }

        .project-content h3 {
            color: #667eea;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .project-content p {
            color: #666;
            margin-bottom: 15px;
        }

        .project-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .tag {
            background: #f0f0f0;
            color: #667eea;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85em;
            font-weight: 600;
        }

        .contact-section {
            text-align: center;
        }

        .contact-content {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            margin: 30px auto;
        }

        .contact-info {
            font-size: 1.1em;
            margin: 20px 0;
            color: #555;
        }

        .contact-info a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.05em;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .profile-section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-frame {
            position: relative;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            border: 5px solid rgba(255, 255, 255, 0.3);
        }

        .profile-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .profile-frame::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1), transparent);
            pointer-events: none;
        }
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 20px;
            margin-top: 60px;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            header p {
                font-size: 1.1em;
            }

            section h2 {
                font-size: 1.8em;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="profile-section">
            <div class="profile-frame">
                <img src="/karbit.jpg" alt="Aditya Nurkhalid Indrawan">
            </div>
        </div>
        <h1>Aditya Nurkhalid Indrawan</h1>
        <p>Pengembang Web | Spesialis Laravel & Full-Stack</p>
        <div class="social-links">
            <a href="#contact">Hubungi Saya</a>
            <a href="/projects">Karya Saya</a>
        </div>
    </header>

    <!-- About Section -->
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

    <!-- Skills Section -->
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

    <!-- Projects Section -->
    <section class="projects-section" id="projects">
        <h2>Proyek Unggulan</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-placeholder">💼</div>
                <div class="project-content">
                    <h3>Proyek Satu</h3>
                    <p>Aplikasi web modern yang dibangun dengan Laravel dan Vue.js, menampilkan pembaruan real-time dan desain responsif.</p>
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">Vue.js</span>
                        <span class="tag">MySQL</span>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-placeholder">📊</div>
                <div class="project-content">
                    <h3>Proyek Dua</h3>
                    <p>Sistem manajemen data dengan analitik canggih, dashboard komprehensif, dan autentikasi pengguna.</p>
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Charts</span>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-placeholder">🎨</div>
                <div class="project-content">
                    <h3>Proyek Tiga</h3>
                    <p>Platform e-commerce dengan integrasi pembayaran, manajemen inventaris, dan sistem pelacakan pesanan.</p>
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">Payment API</span>
                        <span class="tag">Responsive</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
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
                💼 <a href="https://linkedin.com" target="_blank">Profil LinkedIn</a>
            </div>
            <div class="contact-info">
                🐙 <a href="https://github.com" target="_blank">Profil GitHub</a>
            </div>
            <a href="mailto:aniindrawan08@gmail.com" class="cta-button">Kirim Email</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Aditya Nurkhalid Indrawan. Semua hak dilindungi.</p>
    </footer>
</body>
</html>

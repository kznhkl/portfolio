```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio Pribadi</title>

    <style>
        /* ================================
           RESET
        ================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f3e9;
            color: #111;
            line-height: 1.6;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        /* ================================
           ANIMATION
        ================================= */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes floating {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @keyframes pop {
            0% {
                transform: scale(.8);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ================================
           CONTAINER
        ================================= */

        .container {
            width: min(1150px, 92%);
            margin: auto;
        }

        /* ================================
           NAVBAR
        ================================= */

        nav {
            position: sticky;
            top: 15px;
            z-index: 1000;

            width: min(1150px, 92%);
            margin: 15px auto 0;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 18px 22px;

            background: #fff;
            border: 4px solid #111;
            border-radius: 20px;

            box-shadow: 7px 7px 0 #111;

            animation: fadeUp .7s ease;
        }

        .logo {
            font-size: 25px;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .logo span {
            background: #ffde59;
            padding: 3px 8px;
            border: 3px solid #111;
            border-radius: 10px;
        }

        .nav-links {
            display: flex;
            gap: 10px;
            list-style: none;
        }

        .nav-links a {
            display: block;
            padding: 9px 13px;

            font-weight: 800;

            border: 3px solid #111;
            border-radius: 12px;

            background: #fff;

            transition: .2s ease;
        }

        .nav-links a:hover {
            background: #ffde59;
            transform: translate(-3px, -3px);
            box-shadow: 4px 4px 0 #111;
        }

        /* ================================
           HERO
        ================================= */

        .hero {
            min-height: 90vh;

            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 50px;

            align-items: center;

            padding: 80px 0;
        }

        .hero-content {
            animation: fadeUp .8s ease;
        }

        .badge {
            display: inline-block;

            margin-bottom: 20px;
            padding: 8px 14px;

            background: #ff75c3;

            border: 3px solid #111;
            border-radius: 12px;

            font-weight: 900;

            box-shadow: 5px 5px 0 #111;
        }

        .hero h1 {
            font-size: clamp(45px, 7vw, 85px);
            line-height: .95;
            letter-spacing: -5px;

            margin-bottom: 25px;
        }

        .hero h1 span {
            color: #ff75c3;
            -webkit-text-stroke: 2px #111;
        }

        .hero p {
            max-width: 650px;
            font-size: 19px;
            font-weight: 600;

            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;

            padding: 13px 20px;

            border: 4px solid #111;
            border-radius: 14px;

            font-weight: 900;

            box-shadow: 6px 6px 0 #111;

            transition: .2s ease;
        }

        .btn:hover {
            transform: translate(4px, 4px);
            box-shadow: 2px 2px 0 #111;
        }

        .btn-primary {
            background: #ffde59;
        }

        .btn-secondary {
            background: #7cf29a;
        }

        .hero-image-wrapper {
            animation:
                fadeRight .9s ease,
                floating 4s ease-in-out infinite 1s;
        }

        .hero-image {
            border: 5px solid #111;
            border-radius: 30px;

            box-shadow: 12px 12px 0 #111;

            overflow: hidden;
            background: #ffde59;
        }

        .hero-image img {
            width: 100%;
            height: 500px;
            object-fit: cover;

            transition: .4s ease;
        }

        .hero-image:hover img {
            transform: scale(1.05) rotate(1deg);
        }

        /* ================================
           SECTION
        ================================= */

        section {
            padding: 80px 0;
        }

        .section-title {
            display: inline-block;

            margin-bottom: 40px;

            padding: 10px 18px;

            background: #ffde59;

            border: 4px solid #111;
            border-radius: 15px;

            font-size: 32px;
            font-weight: 900;

            box-shadow: 6px 6px 0 #111;

            animation: pop .7s ease;
        }

        /* ================================
           ABOUT
        ================================= */

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .card {
            padding: 30px;

            background: #fff;

            border: 4px solid #111;
            border-radius: 22px;

            box-shadow: 8px 8px 0 #111;

            animation: fadeUp .8s ease;

            transition: .25s ease;
        }

        .card:hover {
            transform: translate(-5px, -5px);
            box-shadow: 13px 13px 0 #111;
        }

        .card h3 {
            font-size: 27px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 17px;
            font-weight: 600;
        }

        /* ================================
           QUOTE
        ================================= */

        blockquote {
            margin-top: 30px;
            padding: 25px;

            background: #ff75c3;

            border: 4px solid #111;
            border-radius: 18px;

            font-size: 22px;
            font-weight: 900;

            box-shadow: 7px 7px 0 #111;
        }

        /* ================================
           EXPERIENCE TABLE
        ================================= */

        .table-wrapper {
            overflow-x: auto;

            background: #fff;

            border: 4px solid #111;
            border-radius: 20px;

            box-shadow: 8px 8px 0 #111;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th,
        td {
            padding: 18px;

            border-bottom: 3px solid #111;

            text-align: left;
        }

        th {
            background: #7cf29a;
            font-size: 17px;
            font-weight: 900;
        }

        td {
            font-weight: 600;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tbody tr {
            transition: .2s ease;
        }

        tbody tr:hover {
            background: #ffde59;
            transform: scale(1.01);
        }

        /* ================================
           HOBBIES
        ================================= */

        .hobby-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .hobby-card {
            padding: 25px;

            min-height: 180px;

            background: #ff75c3;

            border: 4px solid #111;
            border-radius: 20px;

            box-shadow: 7px 7px 0 #111;

            transition: .25s ease;
        }

        .hobby-card:nth-child(2) {
            background: #7cf29a;
        }

        .hobby-card:nth-child(3) {
            background: #ffde59;
        }

        .hobby-card:hover {
            transform: rotate(-2deg) translateY(-7px);
        }

        .hobby-card h3 {
            font-size: 26px;
            margin-bottom: 10px;
        }

        .hobby-card p {
            font-weight: 600;
        }

        /* ================================
           LIST
        ================================= */

        .list-card ul {
            padding-left: 25px;
        }

        .list-card li {
            margin: 8px 0;
            font-weight: 700;
        }

        /* ================================
           MEDIA
        ================================= */

        .media-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .media-card {
            padding: 25px;

            background: #fff;

            border: 4px solid #111;
            border-radius: 22px;

            box-shadow: 8px 8px 0 #111;
        }

        .media-card h3 {
            font-size: 25px;
            margin-bottom: 15px;
        }

        audio {
            width: 100%;
        }

        iframe {
            width: 100%;
            height: 315px;

            border: 4px solid #111;
            border-radius: 16px;
        }

        /* ================================
           SOCIAL
        ================================= */

        .social-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .social {
            padding: 12px 18px;

            background: #fff;

            border: 4px solid #111;
            border-radius: 14px;

            font-weight: 900;

            box-shadow: 5px 5px 0 #111;

            transition: .2s ease;
        }

        .social:hover {
            background: #ff75c3;
            transform: translate(-3px, -3px);
            box-shadow: 8px 8px 0 #111;
        }

        /* ================================
           MARQUEE
        ================================= */

        .marquee {
            overflow: hidden;

            margin: 20px 0;

            background: #111;
            color: #fff;

            border-top: 4px solid #111;
            border-bottom: 4px solid #111;

            padding: 13px 0;

            font-size: 20px;
            font-weight: 900;

            white-space: nowrap;
        }

        .marquee-track {
            display: inline-flex;
            gap: 30px;

            width: max-content;

            animation: marquee 18s linear infinite;
        }

        /* ================================
           FOOTER
        ================================= */

        footer {
            margin-top: 50px;
            padding: 40px 0;

            background: #111;
            color: #fff;

            text-align: center;
        }

        footer p {
            font-weight: 700;
        }

        /* ================================
           RESPONSIVE TABLET
        ================================= */

        @media (max-width: 850px) {

            nav {
                position: relative;
                top: 0;

                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                justify-content: center;
                flex-wrap: wrap;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 60px 0;
            }

            .hero-image-wrapper {
                animation:
                    fadeUp .9s ease,
                    floating 4s ease-in-out infinite 1s;
            }

            .hero-image img {
                height: 400px;
            }

            .about-grid,
            .media-grid {
                grid-template-columns: 1fr;
            }

            .hobby-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* ================================
           RESPONSIVE MOBILE
        ================================= */

        @media (max-width: 550px) {

            nav {
                border-width: 3px;
                box-shadow: 5px 5px 0 #111;
                border-radius: 15px;
            }

            .logo {
                font-size: 21px;
            }

            .nav-links {
                width: 100%;
            }

            .nav-links a {
                padding: 7px 9px;
                font-size: 13px;
            }

            .hero {
                min-height: auto;
                padding: 60px 0;
            }

            .hero h1 {
                font-size: 50px;
                letter-spacing: -3px;
            }

            .hero p {
                font-size: 16px;
            }

            .hero-image img {
                height: 350px;
            }

            section {
                padding: 55px 0;
            }

            .section-title {
                font-size: 25px;
            }

            .card,
            .media-card {
                padding: 22px;
            }

            .hobby-grid {
                grid-template-columns: 1fr;
            }

            .hobby-card {
                min-height: auto;
            }

            iframe {
                height: 230px;
            }

            .btn {
                width: 100%;
                text-align: center;
            }
        }

        /* ================================
           REDUCE MOTION
        ================================= */

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- =================================
         NAVBAR
    ================================== -->

    <nav>

        <div class="logo">
            <span>PORTFOLIO</span>
        </div>

        <ul class="nav-links">
            <li>
                <a href="#home">Home</a>
            </li>

            <li>
                <a href="#about">About</a>
            </li>

            <li>
                <a href="#experience">Experience</a>
            </li>

            <li>
                <a href="#hobbies">Hobbies</a>
            </li>

            <li>
                <a href="#media">Media</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>

    </nav>


    <!-- =================================
         HERO
    ================================== -->

    <main id="home">

        <div class="container">

            <section class="hero">

                <div class="hero-content">

                    <span class="badge">
                        👋 HALO, SAYA
                    </span>

                    <h1>
                        Nama<br>
                        <span>Anda.</span>
                    </h1>

                    <p>
                        Saya adalah seorang pelajar / mahasiswa
                        yang tertarik dengan teknologi, desain,
                        dan pengembangan website.
                    </p>

                    <div class="hero-buttons">

                        <a href="#about" class="btn btn-primary">
                            Tentang Saya →
                        </a>

                        <a href="#contact" class="btn btn-secondary">
                            Hubungi Saya
                        </a>

                    </div>

                </div>


                <div class="hero-image-wrapper">

                    <div class="hero-image">

                        <img
                            src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=80"
                            alt="Foto Portfolio"
                        >

                    </div>

                </div>

            </section>

        </div>


        <!-- =================================
             MARQUEE
        ================================== -->

        <div class="marquee">

            <div class="marquee-track">

                <span>WEB DEVELOPMENT ✦</span>
                <span>DESIGN ✦</span>
                <span>CREATIVE ✦</span>
                <span>TECHNOLOGY ✦</span>

                <span>WEB DEVELOPMENT ✦</span>
                <span>DESIGN ✦</span>
                <span>CREATIVE ✦</span>
                <span>TECHNOLOGY ✦</span>

            </div>

        </div>


        <!-- =================================
             ABOUT
        ================================== -->

        <section id="about">

            <div class="container">

                <h2 class="section-title">
                    Tentang Saya
                </h2>


                <div class="about-grid">

                    <div class="card">

                        <h3>Siapa Saya?</h3>

                        <p>
                            Halo! Nama saya
                            <strong>Nama Anda</strong>.
                            Saya sedang belajar membuat website
                            menggunakan HTML, CSS, dan Laravel.
                        </p>

                        <blockquote>
                            "Belajar sedikit setiap hari
                            untuk menjadi lebih baik."
                        </blockquote>

                    </div>


                    <div class="card">

                        <h3>Keahlian</h3>

                        <p>
                            Saya memiliki ketertarikan pada:
                        </p>

                        <br>

                        <ul class="list-card">
                            <li>HTML & CSS</li>
                            <li>Laravel</li>
                            <li>UI / UX Design</li>
                            <li>Web Development</li>
                            <li>Problem Solving</li>
                        </ul>

                    </div>

                </div>

            </div>

        </section>


        <!-- =================================
             EXPERIENCE
        ================================== -->

        <section id="experience">

            <div class="container">

                <h2 class="section-title">
                    Pengalaman
                </h2>


                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Kegiatan</th>
                                <th>Posisi</th>
                                <th>Tahun</th>
                            </tr>

                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Project Website</td>
                                <td>Web Developer</td>
                                <td>2026</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Project Sekolah</td>
                                <td>Team Member</td>
                                <td>2025</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Desain Website</td>
                                <td>UI Designer</td>
                                <td>2025</td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Belajar Laravel</td>
                                <td>Developer</td>
                                <td>2026</td>
                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </section>


        <!-- =================================
             HOBBIES
        ================================== -->

        <section id="hobbies">

            <div class="container">

                <h2 class="section-title">
                    Hobi Saya
                </h2>


                <div class="hobby-grid">

                    <div class="hobby-card">

                        <h3>💻 Coding</h3>

                        <p>
                            Membuat website dan mempelajari
                            teknologi baru.
                        </p>

                    </div>


                    <div class="hobby-card">

                        <h3>🎮 Gaming</h3>

                        <p>
                            Bermain game untuk hiburan
                            dan mengisi waktu luang.
                        </p>

                    </div>


                    <div class="hobby-card">

                        <h3>🎨 Design</h3>

                        <p>
                            Membuat desain kreatif dan
                            mengeksplorasi UI/UX.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =================================
             MEDIA
        ================================== -->

        <section id="media">

            <div class="container">

                <h2 class="section-title">
                    Media
                </h2>


                <div class="media-grid">


                    <!-- AUDIO -->

                    <div class="media-card">

                        <h3>🎵 Audio</h3>

                        <p>
                            Dengarkan musik favorit saya:
                        </p>

                        <br>

                        <audio controls>

                            <source
                                src="{{ asset('audio/lagu.mp3') }}"
                                type="audio/mpeg"
                            >

                            Browser Anda tidak mendukung
                            elemen audio.

                        </audio>

                    </div>


                    <!-- VIDEO -->

                    <div class="media-card">

                        <h3>🎬 Video</h3>

                        <p>
                            Video yang saya rekomendasikan:
                        </p>

                        <br>

                        <iframe
                            src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                            title="YouTube Video"
                            allowfullscreen>
                        </iframe>

                    </div>

                </div>

            </div>

        </section>


        <!-- =================================
             CONTACT
        ================================== -->

        <section id="contact">

            <div class="container">

                <h2 class="section-title">
                    Kontak
                </h2>


                <div class="card">

                    <h3>
                        Mari Terhubung!
                    </h3>

                    <p>
                        Kamu dapat menemukan saya melalui
                        beberapa platform berikut.
                    </p>

                    <br>


                    <div class="social-wrapper">

                        <a
                            href="https://instagram.com"
                            target="_blank"
                            class="social"
                        >
                            Instagram
                        </a>


                        <a
                            href="https://github.com"
                            target="_blank"
                            class="social"
                        >
                            GitHub
                        </a>


                        <a
                            href="https://linkedin.com"
                            target="_blank"
                            class="social"
                        >
                            LinkedIn
                        </a>


                        <a
                            href="mailto:emailanda@gmail.com"
                            class="social"
                        >
                            Email
                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =================================
         FOOTER
    ================================== -->

    <footer>

        <div class="container">

            <p>
                © {{ date('Y') }} Nama Anda.
                Dibuat dengan Laravel & ❤️
            </p>

        </div>

    </footer>

</body>
</html>
```

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayacan Yazılım - Web Sitemiz Yapım Aşamasında</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(160deg, #0d1117 0%, #161b22 50%, #1f2428 100%);
            font-family: 'Segoe UI', sans-serif;
            color: #e6edf3;
        }

        .card {
            background: #161b22;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
            padding: 3.5rem;
            max-width: 520px;
            width: 90%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            animation: fadeUp 1s ease;
        }

        .icons-row {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .logo {
            max-height: 48px;
            margin: 0 auto 1rem;
            display: block;
        }
        .icon-circle {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
        }
        .icon-circle.blue { background: rgba(14, 165, 233, 0.15); }
        .icon-circle.green { background: rgba(16, 185, 129, 0.15); }

        .company-name {
            font-size: 0.78rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #38bdf8;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .tagline {
            font-size: 0.9rem;
            color: #94a3b8;
            margin-bottom: 1.8rem;
        }

        .divider {
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #0ea5e9, #10b981);
            border-radius: 99px;
            margin: 0 auto 1.8rem;
        }

        p {
            color: #cbd5e1;
            line-height: 1.8;
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        .services {
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }
        .service-tag {
            padding: 0.4rem 1rem;
            border-radius: 99px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        .service-tag.blue { background: rgba(14, 165, 233, 0.2); color: #7dd3fc; border: 1px solid rgba(14, 165, 233, 0.3); }
        .service-tag.green { background: rgba(16, 185, 129, 0.2); color: #6ee7b7; border: 1px solid rgba(16, 185, 129, 0.3); }
        .service-tag.gray { background: rgba(255, 255, 255, 0.08); color: #cbd5e1; border: 1px solid rgba(255, 255, 255, 0.1); }

        .badge {
            display: inline-block;
            background: linear-gradient(90deg, #0ea5e9, #10b981);
            color: #fff;
            padding: 0.55rem 2rem;
            border-radius: 99px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            .card { padding: 2rem 1.4rem; border-radius: 16px; width: 95%; }
            h1 { font-size: 1.5rem; }
            .company-name { font-size: 0.7rem; letter-spacing: 2px; }
            .icon-circle { width: 52px; height: 52px; font-size: 1.4rem; }
            .services { flex-direction: column; align-items: center; gap: 0.6rem; }
            .badge { padding: 0.5rem 1.2rem; font-size: 0.8rem; }
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ asset('assets/frontend/images/logo-4.png') }}" alt="Kayacan Yazılım Logo" class="logo">
        <div class="icons-row">
            <div class="icon-circle blue">💻</div>
            <div class="icon-circle green">🚀</div>
        </div>

        <div class="company-name">Kayacan Yazılım</div>
        <h1>Web Sitemiz Yapım Aşamasında</h1>
        <div class="tagline">Geleceğin Dijital ve Yazılım Çözümlerini İnşa Ediyoruz</div>
        <div class="divider"></div>

        <p>Modern web teknolojileri, kurumsal yönetim panelleri ve sistem entegrasyonu çözümlerimizi en iyi şekilde sunabilmek için sitemizi hazırlıyoruz.</p>

        <div class="services">
            <span class="service-tag blue">💻 Kurumsal Web Siteleri</span>
            <span class="service-tag green">⚡ Özel Yönetim Panelleri</span>
            <span class="service-tag gray">🛠️ Sistem &amp; Entegrasyon</span>
        </div>

        <span class="badge">🚀 Çok Yakında</span>

    </div>
</body>
</html>

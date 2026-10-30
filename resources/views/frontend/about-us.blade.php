@extends('frontend.layouts.master')
@section('content')

  <!-- About Header Section -->
  <section id="about-us" class="py-5">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="text-primary text-uppercase fw-semibold" style="letter-spacing: 2px;">Kurumsal &amp; Mühendislik Yaklaşımı</span>
        <h1 class="display-4 fw-bold mt-2">Hakkımızda &bull; Kayacan Yazılım</h1>
        <p class="text-muted fs-5 col-lg-8 mx-auto">
          Şirketlerin dijital dönüşümüne öncülük eden, yüksek performanslı web siteleri ve kurumsal yazılım çözümleri üreten teknoloji markası.
        </p>
      </div>

      <div class="row align-items-center g-5">
        <!-- Company Profile Card -->
        <div class="col-lg-5" data-aos="fade-right">
          <div class="position-relative text-center">
            <div class="rounded-5 overflow-hidden shadow-lg p-5 border border-3 border-light d-inline-block position-relative w-100"
                 style="max-width: 400px; background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);">
              <div class="p-3 bg-dark rounded-4 d-inline-block shadow-sm mb-4">
                <img src="{{ asset('assets/frontend/images/logo-4.png') }}" alt="Kayacan Yazılım"
                     class="img-fluid" style="max-height: 80px; object-fit: contain;">
              </div>
              <h3 class="fw-bold text-dark mb-1">Kayacan Yazılım</h3>
              <p class="text-muted small mb-4">Profesyonel Web &amp; Kurumsal Yazılım Çözümleri</p>
              
              <div class="d-flex flex-column gap-2 text-start">
                <div class="p-3 bg-white rounded-3 shadow-sm border d-flex align-items-center justify-content-between">
                  <span class="text-dark fw-semibold small">📍 Merkez:</span>
                  <span class="text-dark small">İstanbul, Türkiye</span>
                </div>
                <div class="p-3 bg-white rounded-3 shadow-sm border d-flex align-items-center justify-content-between">
                  <span class="text-dark fw-semibold small">🚀 Uzmanlık:</span>
                  <span class="text-dark small">Kurumsal Web &amp; Panel</span>
                </div>
                <div class="p-3 bg-white rounded-3 shadow-sm border d-flex align-items-center justify-content-between">
                  <span class="text-dark fw-semibold small">⭐ Memnuniyet:</span>
                  <span class="badge bg-success">100% Müşteri Memnuniyeti</span>
                </div>
              </div>
            </div>
            
            <div class="bg-dark text-white p-3 rounded-4 shadow mt-3 text-start mx-auto border border-secondary" style="max-width: 400px;">
              <div class="d-flex align-items-center justify-content-between mb-1">
                <span class="text-primary fw-bold">&lt;Mühendislik Standartları/&gt;</span>
                <span class="badge bg-primary">Modern Web</span>
              </div>
              <small class="text-white-50 d-block">Temiz Kod &bull; Yüksek Hız &bull; Mobil Öncelikli Tasarım</small>
            </div>
          </div>
        </div>

        <!-- Bio Content -->
        <div class="col-lg-7" data-aos="fade-left">
          <div class="p-2 p-lg-4">
            <h3 class="fw-bold mb-3 text-dark">
              Şirketlerin Dijital Dönüşümüne Değer Katıyoruz
            </h3>
            <p class="fs-5 text-dark-emphasis mb-3" style="line-height: 1.8;">
              <strong>Kayacan Yazılım</strong>, modern yazılım mühendisliği prensipleri ve yenilikçi teknolojilerle işletmelerin dijital dünyadaki gücünü artıran kurumsal bir teknoloji çözüm merkezidir.
            </p>
            <p class="text-muted mb-3" style="line-height: 1.8; font-size: 1.05rem;">
              Temiz kod mimarisi, yüksek performans, modern arayüz tasarımı ve arama motoru optimizasyonu (SEO) odaklı yaklaşımımızla işletmelerin ihtiyaçlarına özel çözümler üretiyoruz. Güçlü veritabanı mimarileri, güvenli yönetim panelleri ve kullanıcı dostu arayüzlerle her ölçekten şirketin dijitalleşme sürecine değer katıyoruz.
            </p>
            <p class="text-muted mb-4" style="line-height: 1.8; font-size: 1.05rem;">
              Kurumsal hizmetler, sağlık, yapı ve ticaret gibi farklı sektörlerdeki şirketlerin anahtar teslim modern web sitelerini, dinamik yönetim sistemlerini, WhatsApp hızlı iletişim entegrasyonlarını ve SEO altyapılarını sıfırdan başarıyla hayata geçirdik.
            </p>

            <div class="d-flex flex-wrap gap-3 pt-2">
              <a href="{{ route('references.index') }}" class="btn btn-primary px-4 py-3 rounded-pill fw-semibold text-uppercase text-decoration-none">
                Geliştirdiğimiz Projeleri Gör &rarr;
              </a>
              <a href="{{ route('contact.index') }}" class="btn btn-outline-dark px-4 py-3 rounded-pill fw-semibold text-uppercase text-decoration-none">
                Bizimle İletişime Geçin &rarr;
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Key Metrics / Stats Section -->
  <section id="info" class="py-5 bg-light rounded-5 my-4">
    <div class="container" data-aos="fade-up">
      <div class="row g-4 text-center">
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-4 shadow-sm border h-100">
            <h2 class="display-3 fw-bold text-primary mb-1">100%</h2>
            <p class="text-muted fw-semibold mb-0" style="font-size: 0.95rem;">Müşteri Memnuniyeti</p>
            <small class="text-dark-emphasis">Temiz Kod &amp; Destek</small>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-4 shadow-sm border h-100">
            <h2 class="display-3 fw-bold text-primary mb-1">3+</h2>
            <p class="text-muted fw-semibold mb-0" style="font-size: 0.95rem;">Canlı Kurumsal Proje</p>
            <small class="text-dark-emphasis">Aktif ve Yayında</small>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-4 shadow-sm border h-100">
            <h2 class="display-3 fw-bold text-primary mb-1">8+</h2>
            <p class="text-muted fw-semibold mb-0" style="font-size: 0.95rem;">Uzmanlık Alanı</p>
            <small class="text-dark-emphasis">Modern Web Teknolojileri</small>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="p-3 bg-white rounded-4 shadow-sm border h-100">
            <h2 class="display-3 fw-bold text-primary mb-1">7/24</h2>
            <p class="text-muted fw-semibold mb-0" style="font-size: 0.95rem;">Teknik Danışmanlık</p>
            <small class="text-dark-emphasis">Kesintisiz İletişim</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Process & Standards Timeline -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="text-primary text-uppercase fw-semibold" style="letter-spacing: 2px;">Nasıl Çalışıyoruz?</span>
        <h2 class="display-5 fw-bold mt-2">Hizmet Sürecimiz &amp; İlkelerimiz</h2>
      </div>

      <div class="row g-4 justify-content-center">
        <div class="col-lg-10">
          
          <!-- Step 1 -->
          <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white border-start border-5 border-primary">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-2">
              <h4 class="fw-bold mb-0 text-dark">1. Analiz &amp; Strateji Planlama</h4>
              <span class="badge bg-primary text-white px-3 py-2 rounded-pill">Aşama 1</span>
            </div>
            <p class="text-muted mb-2 fw-medium">
              Sektörel İhtiyaçlar &bull; Rakip Analizi &bull; Hedef Kitle
            </p>
            <p class="text-muted mb-0" style="line-height: 1.7;">
              Şirketinizin sektördeki konumunu, hedef kitlesini ve rakiplerini detaylı analiz ederek projenin gereksinimlerini ve en verimli dönüşüm sağlayan site mimarisini belirliyoruz.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white border-start border-5 border-secondary">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-2">
              <h4 class="fw-bold mb-0 text-dark">2. Modern &amp; Mobil Uyumlu UI/UX Tasarım</h4>
              <span class="badge bg-secondary text-white px-3 py-2 rounded-pill">Aşama 2</span>
            </div>
            <p class="text-muted mb-2 fw-medium">
              Kullanıcı Deneyimi &bull; Marka Kimliği &bull; Responsive Tasarım
            </p>
            <p class="text-muted mb-0" style="line-height: 1.7;">
              Markanızın prestijini en iyi yansıtacak, tüm ekran boyutlarıyla (mobil, tablet, laptop, masaüstü) %100 uyumlu modern ve estetik arayüz tasarımları oluşturuyoruz.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="card border-0 shadow-sm rounded-4 p-4 bg-white border-start border-5 border-success">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-2">
              <h4 class="fw-bold mb-0 text-dark">3. Güvenli Kodlama, SEO &amp; Anahtar Teslim Yayına Alma</h4>
              <span class="badge bg-success text-white px-3 py-2 rounded-pill">Aşama 3</span>
            </div>
            <p class="text-muted mb-2 fw-medium">
              Temiz Kod &bull; Google SEO &bull; Hızlı Yönetim Paneli
            </p>
            <p class="text-muted mb-0" style="line-height: 1.7;">
              Uluslararası standartlarda temiz kod mimarisi, yüksek sayfa açılış hızları, Google teknik SEO optimizasyonu ve kolay kullanımlı yönetim paneli ile projenizi anahtar teslim yayına alıyoruz.
            </p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Vision & Mission -->
  <section id="values" class="py-5">
    <div class="container" data-aos="fade-up">
      <div class="row g-4 align-items-stretch">
        <div class="col-lg-6">
          <div class="bg-black text-white rounded-5 p-5 h-100 d-flex flex-column justify-content-center border border-secondary">
            <span class="text-primary text-uppercase fw-semibold mb-2 d-inline-block ls-4">İlkelerimiz</span>
            <h3 class="display-6 fw-bold mb-3 text-white">Vizyonumuz</h3>
            <p class="fs-5 text-white-50" style="line-height: 1.8;">
              Şirketlerin dijital dünyadaki varlığını en son web teknolojileri, sağlam veritabanı mimarileri, yüksek sayfa açılış hızları ve kusursuz kullanıcı deneyimi (UI/UX) ile güçlendirerek markalarına sürdürülebilir katma değer sağlamaktır.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-primary text-white rounded-5 p-5 h-100 d-flex flex-column justify-content-center">
            <span class="text-dark text-uppercase fw-semibold mb-2 d-inline-block ls-4">Yaklaşımımız</span>
            <h3 class="display-6 fw-bold text-white mb-3">Misyonumuz</h3>
            <p class="fs-5 text-white-50" style="line-height: 1.8;">
              Müşterilerimizin sektörel ihtiyaçlarını dinleyerek; karmaşık yazılım süreçlerini sade, yönetilebilir ve güvenli sistemlere dönüştürmek; temiz kod anlayışı ve satış/dönüşüm odaklı entegrasyonlarla işletmelerin büyümesine ortak olmaktır.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

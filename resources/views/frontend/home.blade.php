@extends('frontend.layouts.master')
@section('content')

  <!-- Banner Section (Screen-Fit Responsive Hero) -->
  <section class="hero-banner-section mt-2">
    <div class="container">
      <div class="banner rounded-4 p-4 p-md-5 d-flex flex-column justify-content-between hero-banner-card"
        style="background: linear-gradient(rgba(0,0,0,0.48), rgba(0,0,0,0.65)), url({{ asset('assets/frontend/images/banner.jpg') }}); background-size: cover; background-repeat: no-repeat; background-position: center;">
        
        <!-- Top Text Content -->
        <div class="text-content text-white pt-2 pt-md-3">
          <p class="fs-6 fs-md-5 text-white-50 mb-2">
            Web &bull; Kurumsal Yazılım Çözümleri
          </p>
          <h1 class="fw-bold mb-0 text-white" style="font-size: clamp(2.2rem, 5.5vw, 3.8rem); line-height: 1.15; letter-spacing: -0.02em;">
            Kayacan <br> Yazılım
          </h1>
        </div>

        <!-- Bottom Stats Row (Anchored Inside Banner) -->
        <div class="row text-uppercase bg-black bg-opacity-80 rounded-4 p-3 p-md-4 mt-auto border border-white border-opacity-10 g-3 g-md-4" style="backdrop-filter: blur(8px);">
          <div class="col-6 col-md-3">
            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-1 gap-sm-3">
              <h2 class="fw-bold text-light m-0" style="font-size: clamp(1.4rem, 3.2vw, 2.2rem); line-height: 1;">
                100%
              </h2>
              <p class="text-light-emphasis m-0" style="font-size: clamp(0.68rem, 1.6vw, 0.76rem); letter-spacing: 0.8px; line-height: 1.35;">
                Müşteri <br class="d-none d-sm-inline"> Memnuniyeti
              </p>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-1 gap-sm-3">
              <h2 class="fw-bold text-light m-0" style="font-size: clamp(1.4rem, 3.2vw, 2.2rem); line-height: 1;">
                100%
              </h2>
              <p class="text-light-emphasis m-0" style="font-size: clamp(0.68rem, 1.6vw, 0.76rem); letter-spacing: 0.8px; line-height: 1.35;">
                Canlı &amp; Yayında <br class="d-none d-sm-inline"> Web Projeleri
              </p>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-1 gap-sm-3">
              <h2 class="fw-bold text-light m-0" style="font-size: clamp(1.4rem, 3.2vw, 2.2rem); line-height: 1;">
                99.9%
              </h2>
              <p class="text-light-emphasis m-0" style="font-size: clamp(0.68rem, 1.6vw, 0.76rem); letter-spacing: 0.8px; line-height: 1.35;">
                Yüksek Hız <br class="d-none d-sm-inline"> &amp; Performans
              </p>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center gap-1 gap-sm-3">
              <h2 class="fw-bold text-light m-0" style="font-size: clamp(1.4rem, 3.2vw, 2.2rem); line-height: 1;">
                7/24
              </h2>
              <p class="text-light-emphasis m-0" style="font-size: clamp(0.68rem, 1.6vw, 0.76rem); letter-spacing: 0.8px; line-height: 1.35;">
                Kesintisiz <br class="d-none d-sm-inline"> Teknik Destek
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <style>
    .hero-banner-section {
      padding-top: 10px;
      padding-bottom: 18px;
    }
    .hero-banner-card {
      /* Full viewport fit: Header is 88px + 10px top + 18px bottom = 116px */
      height: calc(100vh - 116px);
      height: calc(100dvh - 116px);
      min-height: 520px;
    }
    @media (max-width: 991.98px) {
      .hero-banner-section {
        padding-top: 8px;
        padding-bottom: 14px;
      }
      .hero-banner-card {
        /* Mobile/tablet header is 72px + 8px top + 14px bottom = 94px */
        height: calc(100vh - 96px);
        height: calc(100dvh - 96px);
        min-height: 480px;
      }
    }
  </style>

  

  <!-- Services Showcase Section (Jessica Template Grid & Filter Design) -->
  <section id="services" class="portfolio py-5 my-3">
    <div class="container">
      <div class="justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="section-header text-center">
              <span class="text-primary text-uppercase fw-semibold ls-4 mb-2 d-inline-block" style="font-size: 0.85rem; letter-spacing: 2px;">
                Hizmetlerimiz &amp; Çözümler
              </span>
              <h4 class="fw-bold fs-2 txt-fx slide-up text-dark">
                Modern kurumsal web siteleri, dinamik yönetim panelleri ve yüksek performanslı dijital çözümlerle markanızı geleceğe taşıyoruz.
              </h4>
            </div><!--section-header-->
          </div>

          <!-- Category Filter Buttons -->
          <div id="filters" class="button-group d-flex flex-wrap gap-2 gap-md-3 justify-content-center py-4 py-md-5" data-aos="fade-up">
            <a href="#" class="btn btn-primary text-decoration-none text-uppercase is-checked rounded-pill px-4 py-2 fw-semibold" data-filter="*">Tümü</a>
            <a href="#" class="btn btn-primary text-decoration-none text-uppercase rounded-pill px-4 py-2 fw-semibold" data-filter=".webdevelopment">Web Geliştirme</a>
            <a href="#" class="btn btn-primary text-decoration-none text-uppercase rounded-pill px-4 py-2 fw-semibold" data-filter=".adminpanel">Yönetim Panelleri</a>
            <a href="#" class="btn btn-primary text-decoration-none text-uppercase rounded-pill px-4 py-2 fw-semibold" data-filter=".seospeed">SEO &amp; Hız</a>
            <a href="#" class="btn btn-primary text-decoration-none text-uppercase rounded-pill px-4 py-2 fw-semibold" data-filter=".integration">Sistem Entegrasyonu</a>
          </div>
        </div>

        <!-- Services Grid: row row-cols-2 row-cols-lg-3 row-cols-xl-4 -->
        <div class="grid p-0 clearfix row row-cols-2 row-cols-lg-3 row-cols-xl-4 g-3 g-md-4" data-aos="fade-up">
          
          <!-- Item 1: Kurumsal Web -->
          <div class="col mb-4 portfolio-item webdevelopment">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-web-dev.jpg') }}"
                 data-lightbox="services"
                 data-title="Kurumsal Web Sitesi Geliştirme - Modern, hızlı ve tüm cihazlarla %100 uyumlu şirket web siteleri."
                 title="Kurumsal Web Sitesi Geliştirme">
                <img src="{{ asset('assets/frontend/images/services/service-web-dev.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="Kurumsal Web Sitesi Geliştirme">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">Web Geliştirme</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Kurumsal Web Sitesi</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 2: Yönetim Panelleri -->
          <div class="col mb-4 portfolio-item adminpanel">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-admin-panel.jpg') }}"
                 data-lightbox="services"
                 data-title="Özel Dinamik Yönetim Panelleri - Hizmet, ürün ve taleplerinizi teknik bilgi gerekmeden yönetin."
                 title="Özel Dinamik Yönetim Panelleri">
                <img src="{{ asset('assets/frontend/images/services/service-admin-panel.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="Özel Dinamik Yönetim Panelleri">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">Yönetim Paneli</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Dinamik Yönetim Paneli</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 3: WhatsApp CRM & Entegrasyon -->
          <div class="col mb-4 portfolio-item integration webdevelopment">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-whatsapp-crm.jpg') }}"
                 data-lightbox="services"
                 data-title="WhatsApp Randevu &amp; İletişim Akışları - Ziyaretçilerinizle anlık rezervasyon ve sipariş iletişimi."
                 title="WhatsApp Randevu &amp; İletişim Akışları">
                <img src="{{ asset('assets/frontend/images/services/service-whatsapp-crm.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="WhatsApp Randevu ve İletişim">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">Entegrasyon</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">WhatsApp İletişim Akışları</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 4: SEO & Hız Optimizasyonu -->
          <div class="col mb-4 portfolio-item seospeed">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-seo-speed.jpg') }}"
                 data-lightbox="services"
                 data-title="Teknik SEO &amp; Hız Optimizasyonu - 100 PageSpeed skoru ve Google arama motoru optimizasyonu."
                 title="Teknik SEO &amp; Hız Optimizasyonu">
                <img src="{{ asset('assets/frontend/images/services/service-seo-speed.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="Teknik SEO ve Hız">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">SEO &amp; Hız</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">100 PageSpeed &amp; SEO</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 5: API & Bulut Entegrasyonu -->
          <div class="col mb-4 portfolio-item integration adminpanel">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-api-cloud.jpg') }}"
                 data-lightbox="services"
                 data-title="Sistem &amp; Servis Entegrasyonları - Harici API, ödeme geçitleri ve veritabanı mimarisi."
                 title="Sistem &amp; Servis Entegrasyonları">
                <img src="{{ asset('assets/frontend/images/services/service-api-cloud.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="Sistem ve Servis Entegrasyonları">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">Entegrasyon</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Sistem &amp; API Mimarisi</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 6: Web Yenileme & Bakım -->
          <div class="col mb-4 portfolio-item webdevelopment seospeed">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-maintenance.jpg') }}"
                 data-lightbox="services"
                 data-title="Web Sitesi Yenileme &amp; Bakım - Mevcut web sitenizi modern kodlama ve tam mobil uyum ile baştan inşa etme."
                 title="Web Sitesi Yenileme &amp; Bakım">
                <img src="{{ asset('assets/frontend/images/services/service-maintenance.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="Web Sitesi Yenileme ve Bakım">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">Modernizasyon</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Web Yenileme &amp; Bakım</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 7: E-Ticaret & Katalog -->
          <div class="col mb-4 portfolio-item webdevelopment adminpanel">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-web-dev.jpg') }}"
                 data-lightbox="services"
                 data-title="E-Ticaret &amp; Ürün Kataloğu - Hızlı sipariş ve modern ürün sunum altyapısı."
                 title="E-Ticaret &amp; Ürün Kataloğu">
                <img src="{{ asset('assets/frontend/images/services/service-web-dev.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="E-Ticaret ve Ürün Kataloğu">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">E-Ticaret</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Ürün &amp; Katalog Altyapısı</h6>
                </div>
              </a>
            </div>
          </div>

          <!-- Item 8: Sunucu & Güvenlik -->
          <div class="col mb-4 portfolio-item seospeed integration">
            <div class="service-portfolio-item rounded-4 overflow-hidden position-relative shadow-sm bg-black h-100">
              <a href="{{ asset('assets/frontend/images/services/service-api-cloud.jpg') }}"
                 data-lightbox="services"
                 data-title="Bulut Sunucu &amp; SSL Güvenlik - Kesintisiz çalışma garantisi ve yüksek güvenlik."
                 title="Bulut Sunucu &amp; SSL Güvenlik">
                <img src="{{ asset('assets/frontend/images/services/service-api-cloud.jpg') }}"
                     class="img-fluid rounded-4 w-100 service-card-img" alt="Bulut Sunucu ve Güvenlik">
                <div class="service-card-overlay p-3 position-absolute bottom-0 start-0 end-0 text-start">
                  <span class="badge bg-primary text-white text-uppercase px-2 py-1 mb-1" style="font-size: 0.68rem;">Altyapı</span>
                  <h6 class="text-white fw-bold mb-0" style="font-size: 0.95rem;">Bulut &amp; SSL Güvenlik</h6>
                </div>
              </a>
            </div>
          </div>

        </div>

        <div class="text-center p-3">
          <a href="{{ route('services-category.index') }}" class="btn btn-outline-dark btn-lg mt-3 text-uppercase text-decoration-none rounded-pill px-5 fw-semibold">
            Tüm Hizmetlerimizi İnceleyin &rarr;
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Live Client References (Kept in ONE place on home page - Dynamic with Database) -->
  <section id="references" class="py-5 my-4">
    <div class="container py-2">
      <div class="rounded-5 p-4 p-md-5 border border-white border-opacity-10 position-relative overflow-hidden shadow-lg references-showcase-container"
           style="background: linear-gradient(135deg, #0e1118 0%, #171b26 100%);">
        
        <!-- Ambient Radial Glow Backdrop -->
        <div class="position-absolute top-0 start-50 translate-middle-x pointer-events-none"
             style="width: 600px; height: 260px; background: radial-gradient(circle, rgba(240, 117, 108, 0.15) 0%, transparent 70%); filter: blur(50px); z-index: 0;"></div>

        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-5 position-relative" style="z-index: 1;" data-aos="fade-up">
          <div class="col-lg-8">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3"
                 style="background: rgba(240, 117, 108, 0.12); border: 1px solid rgba(240, 117, 108, 0.35);">
              <span class="live-pulse-dot"></span>
              <span style="color: #F0756C; font-weight: 700; font-size: 0.78rem; letter-spacing: 2px;">CANLI REFERANSLARIMIZ</span>
            </div>
            <h2 class="display-6 fw-bold text-white mb-2">Yayında Olan Canlı Web Projelerimiz</h2>
            <p class="text-white-50 fs-5 mb-0 mx-auto" style="max-width: 780px; line-height: 1.6;">
              Farklı sektörlerdeki kurumsal şirketler için sıfırdan tasarlayıp geliştirdiğimiz, SEO uyumlu ve aktif olarak hizmet veren canlı web siteleri.
            </p>
          </div>
        </div>

        <!-- Dynamic Reference Grid -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 position-relative" style="z-index: 1;" data-aos="fade-up">
          @forelse($references as $reference)
            <div class="col">
              <div class="card h-100 rounded-4 border border-white border-opacity-10 shadow-sm overflow-hidden reference-dynamic-card"
                   style="background: rgba(18, 20, 29, 0.85); backdrop-filter: blur(12px);">
                
                <!-- Top Visual Showcase with Client Logo -->
                <div class="position-relative p-4 d-flex align-items-center justify-content-center overflow-hidden reference-card-header"
                     style="background: {{ $reference->card_gradient }}; min-height: 210px;">
                  
                  <!-- Domain Tag -->
                  @if($reference->host)
                    <span class="position-absolute top-0 start-0 m-3 badge bg-black bg-opacity-70 text-white-50 border border-white border-opacity-10 px-3 py-1 rounded-pill font-monospace"
                          style="font-size: 0.72rem; letter-spacing: 0.5px;">
                      {{ $reference->host }}
                    </span>
                  @endif

                  <!-- Live Pulse Status Badge -->
                  <span class="position-absolute top-0 end-0 m-3 badge bg-danger text-white px-3 py-1 rounded-pill fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                    <span class="live-pulse-indicator"></span>
                    {{ $reference->badge ?? 'Canlı Proje' }}
                  </span>

                  <!-- Client Logo Container (Crisp White Pill for All Logo Formats) -->
                  <div class="px-3 py-2 rounded-3 d-inline-flex align-items-center justify-content-center bg-white shadow-sm reference-logo-wrapper"
                       style="min-width: 150px; max-width: 230px; height: 72px;">
                    <img src="{{ $reference->image_url }}"
                         alt="{{ $reference->name }}"
                         class="img-fluid reference-card-logo"
                         style="max-height: 54px; max-width: 190px; object-fit: contain; transition: transform 0.4s ease;">
                  </div>
                </div>

                <!-- Card Content -->
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                  <div>
                    <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                      <span class="rounded-pill px-3 py-1 fw-bold text-uppercase d-inline-block"
                            style="background: rgba(240, 117, 108, 0.15); color: #F0756C; border: 1px solid rgba(240, 117, 108, 0.35); font-size: 0.70rem; letter-spacing: 0.5px;">
                        {{ $reference->category_label }}
                      </span>
                      @if($reference->location)
                        <small class="text-white-50" style="font-size: 0.75rem;">{{ $reference->location }}</small>
                      @endif
                    </div>

                    <h5 class="fw-bold mb-2 text-white" style="font-size: 1.15rem; line-height: 1.35;">
                      {{ $reference->name }}
                    </h5>

                    <p class="text-white-50 mb-3" style="font-size: 0.90rem; line-height: 1.65;">
                      {{ $reference->description }}
                    </p>

                    <!-- Technologies Used -->
                    <div class="d-flex flex-wrap gap-1 mb-4">
                      @foreach($reference->tech_list as $tech)
                        <span class="badge bg-white bg-opacity-10 text-white-50 border border-white border-opacity-10 rounded-pill px-2 py-1"
                              style="font-size: 0.70rem; font-weight: 500;">
                          {{ $tech }}
                        </span>
                      @endforeach
                    </div>
                  </div>

                  <!-- Action Button -->
                  <div class="pt-2">
                    <a href="{{ $reference->url ?? route('references.index') }}"
                       target="{{ $reference->url ? '_blank' : '_self' }}"
                       rel="noopener"
                       class="btn btn-outline-light w-100 rounded-pill py-2 fw-semibold d-flex align-items-center justify-content-center gap-2 reference-site-btn">
                      <span>Siteyi Canlı İncele</span>
                      <span class="fs-5 reference-btn-arrow">&nearr;</span>
                    </a>
                  </div>
                </div>

              </div>
            </div>
          @empty
            <div class="col-12 text-center text-white-50 py-5">
              Kayıtlı referans bulunmuyor.
            </div>
          @endforelse
        </div>

        <!-- Section CTA Link -->
        <div class="text-center pt-5 position-relative" style="z-index: 1;">
          <a href="{{ route('references.index') }}"
             class="btn btn-outline-light btn-lg px-5 rounded-pill text-uppercase text-decoration-none fw-semibold reference-all-btn">
            Tüm Referansları ve Detayları Gör &rarr;
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Client Testimonials & Trust (Dynamic with Database - Swiper Enabled) -->
  <section class="py-5 my-4" id="testimonials">
    <div class="container py-2">
      <div class="rounded-5 p-4 p-md-5 border border-white border-opacity-10 position-relative overflow-hidden shadow-lg testimonials-showcase-container"
           style="background: linear-gradient(135deg, #0e1118 0%, #151824 100%);">
        
        <!-- Ambient Glow -->
        <div class="position-absolute top-0 end-0 pointer-events-none"
             style="width: 500px; height: 260px; background: radial-gradient(circle, rgba(240, 117, 108, 0.12) 0%, transparent 70%); filter: blur(50px); z-index: 0;"></div>

        <!-- Section Header -->
        <div class="text-center mb-5 position-relative" style="z-index: 1;" data-aos="fade-up">
          <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-3"
               style="background: rgba(240, 117, 108, 0.12); border: 1px solid rgba(240, 117, 108, 0.35);">
            <span style="color: #F0756C; font-weight: 700; font-size: 0.78rem; letter-spacing: 2px;">MÜŞTERİ MEMNUNİYETİ &amp; DEĞERLENDİRMELER</span>
          </div>
          <h2 class="display-6 fw-bold text-white mt-2">Birlikte Çalıştığımız Markalar Ne Diyor?</h2>
          <p class="text-white-50 fs-5 mt-2 mx-auto" style="max-width: 740px; line-height: 1.6;">
            Geliştirdiğimiz kurumsal web platformları ve teslim sonrası teknik destek süreçlerimiz hakkında gerçek müşteri deneyimleri.
          </p>
        </div>

        <!-- Dynamic Testimonials Swiper -->
        <div class="swiper testimonial-swiper position-relative" style="z-index: 1;" data-aos="fade-up">
          <div class="swiper-wrapper py-2">
            @forelse($testimonials as $testimonial)
              <div class="swiper-slide h-auto">
                <div class="testimonial-dynamic-card p-4 rounded-4 border border-white border-opacity-10 h-100 d-flex flex-column justify-content-between position-relative shadow-sm"
                     style="background: rgba(18, 20, 29, 0.85); backdrop-filter: blur(12px);">
                  
                  <!-- Watermark Quote Icon -->
                  <svg class="position-absolute top-0 end-0 m-4 opacity-10" width="46" height="46" fill="#F0756C" viewBox="0 0 24 24">
                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                  </svg>

                  <div>
                    <!-- Rating Stars -->
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="text-warning" style="letter-spacing: 2px; font-size: 1.1rem;">
                        @for($i = 0; $i < ($testimonial->rating ?? 5); $i++)
                          &#9733;
                        @endfor
                      </div>
                      <span class="badge bg-warning bg-opacity-10 text-warning px-2 py-1 rounded-pill" style="font-size: 0.70rem;">
                        {{ number_format($testimonial->rating ?? 5, 1) }} / 5.0
                      </span>
                    </div>

                    <!-- Comment -->
                    <p class="text-light-emphasis mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                      &ldquo;{{ $testimonial->comment }}&rdquo;
                    </p>
                  </div>

                  <!-- Author Details -->
                  <div class="d-flex align-items-center gap-3 pt-3 border-top border-white border-opacity-10">
                    <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold text-white flex-shrink-0 shadow-sm"
                         style="width: 46px; height: 46px; background: linear-gradient(135deg, #F0756C 0%, #b84139 100%); font-size: 0.95rem;">
                      {{ $testimonial->computed_initials }}
                    </div>
                    <div class="overflow-hidden">
                      <h6 class="mb-0 fw-bold text-white text-truncate" style="font-size: 0.98rem;">{{ $testimonial->client_name }}</h6>
                      <small class="text-white-50 d-block text-truncate" style="font-size: 0.80rem;">{{ $testimonial->client_title }}</small>
                      @if($testimonial->company)
                        <small class="text-primary fw-semibold d-block text-truncate" style="font-size: 0.75rem;">{{ $testimonial->company }}</small>
                      @endif
                    </div>
                  </div>

                </div>
              </div>
            @empty
              <div class="swiper-slide text-center text-white-50 py-5">
                Henüz kayıtlı müşteri yorumu bulunmuyor.
              </div>
            @endforelse
          </div>

          <!-- Swiper Pagination -->
          <div class="testimonial-swiper-pagination text-center pt-4"></div>
        </div>

      </div>
    </div>
  </section>

  <style>
    /* Service Items Styling */
    .service-portfolio-item {
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-portfolio-item:hover {
      transform: translateY(-6px);
      box-shadow: 0 16px 32px rgba(0,0,0,0.18) !important;
    }
    .service-card-img {
      height: 230px;
      width: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }
    .service-portfolio-item:hover .service-card-img {
      transform: scale(1.06);
    }
    .service-card-overlay {
      background: linear-gradient(to top, rgba(0,0,0,0.90) 0%, rgba(0,0,0,0.50) 65%, transparent 100%);
      pointer-events: none;
    }

    /* Live Pulsing Dot Animation */
    .live-pulse-dot {
      display: inline-block;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #F0756C;
      box-shadow: 0 0 0 rgba(240, 117, 108, 0.6);
      animation: pulse-coral 2s infinite;
    }
    @keyframes pulse-coral {
      0% {
        box-shadow: 0 0 0 0 rgba(240, 117, 108, 0.7);
      }
      70% {
        box-shadow: 0 0 0 8px rgba(240, 117, 108, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(240, 117, 108, 0);
      }
    }

    .live-pulse-indicator {
      display: inline-block;
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background-color: #ffffff;
      box-shadow: 0 0 0 rgba(255, 255, 255, 0.6);
      animation: pulse-white 1.8s infinite;
    }
    @keyframes pulse-white {
      0% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.8);
      }
      70% {
        box-shadow: 0 0 0 6px rgba(255, 255, 255, 0);
      }
      100% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
      }
    }

    /* Reference Dynamic Card Hover Effects */
    .reference-dynamic-card {
      transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s ease, border-color 0.35s ease;
    }
    .reference-dynamic-card:hover {
      transform: translateY(-8px);
      border-color: rgba(240, 117, 108, 0.45) !important;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 30px rgba(240, 117, 108, 0.15) !important;
    }
    .reference-dynamic-card:hover .reference-card-logo {
      transform: scale(1.08);
    }
    .reference-dynamic-card:hover .reference-btn-arrow {
      transform: translate(3px, -3px);
    }
    .reference-btn-arrow {
      display: inline-block;
      transition: transform 0.25s ease;
    }

    .reference-site-btn {
      border-color: rgba(255, 255, 255, 0.25);
      color: #ffffff;
      transition: all 0.3s ease;
    }
    .reference-site-btn:hover {
      background-color: #F0756C !important;
      border-color: #F0756C !important;
      color: #ffffff !important;
      box-shadow: 0 6px 18px rgba(240, 117, 108, 0.35);
    }

    .reference-all-btn {
      border-color: rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
    }
    .reference-all-btn:hover {
      background-color: #F0756C !important;
      border-color: #F0756C !important;
      color: #ffffff !important;
      box-shadow: 0 8px 24px rgba(240, 117, 108, 0.35);
    }

    /* Testimonial Dynamic Card Hover Effects */
    .testimonial-dynamic-card {
      transition: transform 0.35s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.35s ease, border-color 0.35s ease;
    }
    .testimonial-dynamic-card:hover {
      transform: translateY(-6px);
      border-color: rgba(240, 117, 108, 0.35) !important;
      box-shadow: 0 16px 36px rgba(0, 0, 0, 0.45), 0 0 24px rgba(240, 117, 108, 0.1) !important;
    }

    /* Swiper Pagination Styling */
    .testimonial-swiper-pagination .swiper-pagination-bullet {
      background: rgba(255, 255, 255, 0.3);
      width: 10px;
      height: 10px;
      opacity: 0.6;
      transition: all 0.3s ease;
    }
    .testimonial-swiper-pagination .swiper-pagination-bullet-active {
      background: #F0756C !important;
      opacity: 1 !important;
      width: 28px;
      border-radius: 6px;
    }
  </style>

  <!-- FAQs Section -->
  <section class="py-5">
    <div class="container">
      <div class="text-center pt-3 mb-5">
        <span class="text-primary text-uppercase fw-semibold" style="letter-spacing: 2px;">Merak Edilenler</span>
        <h2 class="display-5 fw-bold mt-2">Sıkça Sorulan Sorular</h2>
      </div>
      
      <div class="row align-items-center">
        <div class="col-lg-5 text-center mb-4 mb-lg-0">
          <div class="p-4 bg-light rounded-4 border">
            <div class="d-inline-flex p-3 rounded-circle bg-primary text-white mb-3">
              <svg width="40" height="40" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 16h-2v-2h2v2zm1.07-7.75l-.9.92C12.45 11.9 12 12.5 12 14h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.04-.42 1.99-1.07 2.75z"/>
              </svg>
            </div>
            <h4 class="fw-bold mb-2">Aklınızda Soru mu Var?</h4>
            <p class="text-muted mb-4">
              Şirketinizin ihtiyaçlarına en uygun web çözümü ve tekliflendirme için doğrudan görüşelim.
            </p>
            <a href="https://wa.me/905415600727" target="_blank" class="btn btn-success rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
              <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
              <span>WhatsApp'tan Sorun</span>
            </a>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="accordion accordion-flush" id="accordion-flush">
            
            <div class="accordion-item border mb-3 rounded-3 overflow-hidden shadow-sm">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed fw-bold py-3" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  Web sitesi geliştirme süreci nasıl işliyor?
                </button>
              </h5>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion-flush">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  Öncelikle şirketinizin faaliyet alanını, hedeflerini ve rakiplerinizi analiz ediyoruz. Ardından modern ve responsive bir tasarım şablonu oluşturarak güçlü ve güvenli altyapısını kuruyoruz. İçeriklerin girilmesi, testler ve SEO yapılandırmasından sonra sitenizi canlıya alıyoruz.
                </div>
              </div>
            </div>

            <div class="accordion-item border mb-3 rounded-3 overflow-hidden shadow-sm">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed fw-bold py-3" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  Sitemi teslim aldıktan sonra içerikleri kendim güncelleyebilir miyim?
                </button>
              </h5>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  Evet! Talebinize bağlı olarak geliştirdiğimiz kullanımı son derece kolay Dinamik Yönetim Paneli sayesinde teknik bilgiye ihtiyaç duymadan hizmetlerinizi, fotoğraflarınızı, yazılarınızı ve iletişim bilgilerinizi kolayca güncelleyebilirsiniz.
                </div>
              </div>
            </div>

            <div class="accordion-item border mb-3 rounded-3 overflow-hidden shadow-sm">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed fw-bold py-3" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  Sitem tüm telefonlarda, tabletlerde ve bilgisayarlarda düzgün görünür mü?
                </button>
              </h5>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  Kesinlikle. Geliştirdiğimiz tüm web projeleri mobil öncelikli (Mobile-First) responsive prensiplerine göre tasarlanır. Akıllı telefon, tablet, dizüstü ve geniş ekran monitörlerde piksel kusursuzluğunda görüntülenir.
                </div>
              </div>
            </div>

            <div class="accordion-item border mb-3 rounded-3 overflow-hidden shadow-sm">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed fw-bold py-3" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                  aria-controls="collapseFour">
                  Arama Motoru Optimizasyonu (SEO) ve WhatsApp butonu ekliyor musunuz?
                </button>
              </h5>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  Evet. Geliştirdiğimiz tüm projelerde, sayfa başlıkları, meta açıklamaları, OpenGraph etiketleri ve site haritası dahil eksiksiz teknik SEO altyapısı kuruyoruz. Ayrıca ziyaretçilerinizin anında size ulaşabilmesi için WhatsApp hızlı iletişim butonları entegre ediyoruz.
                </div>
              </div>
            </div>

            <div class="accordion-item border mb-3 rounded-3 overflow-hidden shadow-sm">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed fw-bold py-3" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                  aria-controls="collapseFive">
                  Teslimat sonrası teknik destek ve kaynak kodlar sağlanıyor mu?
                </button>
              </h5>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordion-flush">
                <div class="accordion-body text-muted" style="line-height: 1.7;">
                  Evet, proje tamamlandığında tüm kaynak kodlar eksiksiz ve temiz biçimde teslim edilir. Canlıya alma sonrasında hosting/domain kurulumu, e-posta yapılandırmaları ve ilk periyot teknik desteği sağlıyoruz.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Quick Contact Section -->
  <section class="p-5 bg-yellow py-5 rounded-5 my-4">
    <div class="container">
      <div class="row justify-content-center my-3">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <span class="text-uppercase text-dark fw-bold ls-4" style="font-size: 0.85rem;">Doğrudan İletişim</span>
          <h2 class="display-4 fw-bold mt-2">Mesaj Gönderin</h2>
          <p class="text-dark-emphasis mb-4" style="line-height: 1.8;">
            Şirketiniz için yeni bir web projesi başlatmak, teklif almak veya aklınızdaki fikri danışmak için formu doldurabilir ya da doğrudan arayabilirsiniz.
          </p>

          <div class="d-flex flex-column gap-3 mb-4">
            <div class="d-flex align-items-center gap-3">
              <div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                <svg width="18" height="18"><use xlink:href="#envelope"></use></svg>
              </div>
              <div>
                <small class="text-muted d-block">E-posta</small>
                <a href="mailto:kayacan.serap@gmail.com" class="text-dark fw-bold text-decoration-none">kayacan.serap@gmail.com</a>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
              </div>
              <div>
                <small class="text-muted d-block">Telefon / WhatsApp</small>
                <a href="https://wa.me/905415600727" target="_blank" class="text-dark fw-bold text-decoration-none">+90 541 560 07 27</a>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                <svg width="18" height="18"><use xlink:href="#linkedin"></use></svg>
              </div>
              <div>
                <small class="text-muted d-block">LinkedIn</small>
                <a href="https://www.linkedin.com/in/serap-kayacan-3ba481207" target="_blank" class="text-dark fw-bold text-decoration-none">Kayacan Yazılım LinkedIn</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 offset-lg-1">
          <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if(session('error'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label text-dark fw-semibold" style="font-size: 0.9rem;">Adınız Soyadınız / Firma Adı *</label>
                <input type="text" class="form-control p-3 rounded-3 border bg-light" name="name" id="name" required placeholder="Örn: Ahmet Yılmaz" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label text-dark fw-semibold" style="font-size: 0.9rem;">E-posta Adresiniz *</label>
                <input type="email" class="form-control p-3 rounded-3 border bg-light" name="email" id="email" required placeholder="ornek@sirketiniz.com" />
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label text-dark fw-semibold" style="font-size: 0.9rem;">Konu</label>
                <input type="text" class="form-control p-3 rounded-3 border bg-light" name="subject" id="subject" placeholder="Web Sitesi Teklifi / Proje Danışmanlığı" />
              </div>
              <div class="mb-3">
                <label for="message" class="form-label text-dark fw-semibold" style="font-size: 0.9rem;">Mesajınız *</label>
                <textarea class="form-control p-3 rounded-3 border bg-light" name="message" id="message" rows="4" required placeholder="Projeniz veya ihtiyaçlarınız hakkında kısaca bilgi verin..."></textarea>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-dark btn-lg text-uppercase rounded-pill fw-semibold py-3">
                  Mesajı Gönder &rarr;
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

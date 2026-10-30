@extends('frontend.layouts.master')
@section('content')

  @php
    $words = str_word_count(strip_tags($blog->content));
    $readTime = max(1, (int) ceil($words / 180));
    $currentUrl = url()->current();
  @endphp

  <!-- Page Header Start -->
  <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-4">
      <div class="col-lg-10 mx-auto text-center text-white">
        
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
          <ol class="breadcrumb justify-content-center mb-0" style="font-size: 0.85rem;">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Anasayfa</a></li>
            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}" class="text-white-50 text-decoration-none">Yazılar &amp; İpuçları</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page">{{ $blog->category ?? 'Teknoloji' }}</li>
          </ol>
        </nav>

        <!-- Category Badge -->
        <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-3" style="font-size: 0.85rem;">
          {{ $blog->category }}
        </span>

        <!-- Article Title -->
        <h1 class="display-5 fw-bold text-white mb-3" style="line-height: 1.25;">
          {{ $blog->title }}
        </h1>

        <!-- Meta Information Row -->
        <div class="d-flex flex-wrap align-items-center justify-content-center gap-4 text-white-50 fs-6 pt-2">
          <div class="d-flex align-items-center gap-2">
            <div class="rounded-circle bg-white bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">
              <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            </div>
            <span class="text-white">Kayacan Yazılım Ekibi</span>
          </div>

          <div class="d-flex align-items-center gap-2">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
            <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('d M, Y') }}</span>
          </div>

          <div class="d-flex align-items-center gap-2">
            <span class="badge bg-white bg-opacity-10 text-white fw-normal px-2 py-1 rounded">
              ⏱️ {{ $readTime }} dk okuma
            </span>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <section class="py-4">
    <div class="container">
      <div class="row g-5">
        
        <!-- Main Article Column -->
        <div class="col-lg-8">
          <article class="card rounded-4 border-0 shadow-sm p-4 p-md-5 bg-white mb-4">
            
            <!-- Featured Image -->
            @if($blog->image)
              <div class="position-relative rounded-4 overflow-hidden mb-4 shadow-sm" style="max-height: 460px;">
                <img src="{{ asset($blog->image) }}" class="img-fluid w-100" style="width: 100%; max-height: 460px; object-fit: cover;" alt="{{ $blog->title }}">
              </div>
            @endif

            <!-- Article Body -->
            <div class="blog-article-content py-2" style="font-size: 1.08rem; line-height: 1.9; color: #2d3748;">
              {!! $blog->content !!}
            </div>

            <!-- Share Buttons & Tags -->
            <div class="pt-4 mt-5 border-top d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-2">
                <span class="fw-bold text-dark me-2" style="font-size: 0.95rem;">Paylaş:</span>
                
                <!-- WhatsApp Share -->
                <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->title . ' - ' . $currentUrl) }}" target="_blank" rel="noopener"
                   class="btn btn-sm btn-outline-success rounded-pill px-3 py-1.5 d-inline-flex align-items-center gap-2">
                  <svg width="15" height="15"><use xlink:href="#whatsapp"></use></svg>
                  <span>WhatsApp</span>
                </a>

                <!-- LinkedIn Share -->
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode($currentUrl) }}" target="_blank" rel="noopener"
                   class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1.5 d-inline-flex align-items-center gap-2">
                  <svg width="14" height="14"><use xlink:href="#linkedin"></use></svg>
                  <span>LinkedIn</span>
                </a>

                <!-- Twitter / X Share -->
                <a href="https://twitter.com/intent/tweet?url={{ urlencode($currentUrl) }}&text={{ urlencode($blog->title) }}" target="_blank" rel="noopener"
                   class="btn btn-sm btn-outline-dark rounded-pill px-3 py-1.5 d-inline-flex align-items-center gap-2">
                  <svg width="14" height="14"><use xlink:href="#twitter"></use></svg>
                  <span>Paylaş</span>
                </a>
              </div>

              <div>
                <a href="{{ route('blog.index') }}" class="btn btn-light rounded-pill px-3 py-1.5 fw-semibold border" style="font-size: 0.88rem;">
                  &larr; Tüm Yazılara Dön
                </a>
              </div>
            </div>

            <!-- Author Signature Box -->
            <div class="p-4 rounded-4 bg-light border mt-4 d-flex flex-column flex-sm-row align-items-center gap-4">
              <div class="p-3 bg-white rounded-circle shadow-sm flex-shrink-0">
                <img src="{{ asset('assets/frontend/images/logo-4.png') }}" alt="Kayacan Yazılım" style="max-height: 48px; max-width: 110px; object-fit: contain;">
              </div>
              <div>
                <div class="d-flex align-items-center gap-2 mb-1">
                  <h6 class="fw-bold text-dark mb-0">Kayacan Yazılım Editör &amp; Yazılım Ekibi</h6>
                  <span class="badge bg-dark text-white rounded-pill" style="font-size: 0.7rem;">Mühendislik</span>
                </div>
                <p class="text-muted mb-0" style="font-size: 0.92rem; line-height: 1.6;">
                  Modern web mimarileri, kurumsal yönetim panelleri, performans optimizasyonları ve teknik SEO alanlarında işletmelere katma değerli dijital çözümler üretiyoruz.
                </p>
              </div>
            </div>

            <!-- Next Step CTA Box -->
            <div class="p-4 p-md-5 rounded-4 mt-5 text-white position-relative overflow-hidden"
                 style="background: linear-gradient(135deg, #111827 0%, #1f2937 100%);">
              <div class="position-relative" style="z-index: 2;">
                <span class="badge bg-primary text-white px-3 py-1 rounded-pill mb-2" style="font-size: 0.75rem;">Yazılım Çözümleri</span>
                <h4 class="fw-bold text-white mb-2">Şirketiniz İçin Modern Bir Web Sitesi Mi İstiyorsunuz?</h4>
                <p class="text-white-50 mb-4" style="font-size: 0.98rem; line-height: 1.7;">
                  İşletmenizin marka prestijini yükseltecek, mobil uyumlu ve SEO altyapılı bir web projesi için bizimle hemen iletişime geçin.
                </p>
                <div class="d-flex flex-wrap gap-3">
                  <a href="{{ route('contact.index') }}" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold">
                    Ücretsiz Teklif Alın &rarr;
                  </a>
                  <a href="https://wa.me/905415600727" target="_blank" rel="noopener" class="btn btn-success rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                    <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
                    <span>WhatsApp İletişim</span>
                  </a>
                </div>
              </div>
            </div>

          </article>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
          
          <!-- Recent Blogs Widget -->
          <div class="p-4 bg-white rounded-4 border shadow-sm mb-4">
            <h5 class="fw-bold mb-3 text-dark d-flex align-items-center gap-2">
              <span class="d-inline-block rounded-circle bg-primary" style="width: 8px; height: 8px;"></span>
              <span>Son Yazılar</span>
            </h5>
            
            <div class="d-flex flex-column gap-3">
              @foreach($recentBlogs as $recent)
                <a href="{{ route('blog.show', $recent->slug) }}"
                   class="p-2 rounded-3 text-decoration-none text-dark d-flex align-items-center gap-3 transition-hover border-bottom pb-3">
                  @if($recent->image)
                    <img src="{{ asset($recent->image) }}" class="rounded-3 flex-shrink-0"
                         style="width: 76px; height: 76px; object-fit: cover;" alt="{{ $recent->title }}">
                  @endif
                  <div>
                    <span class="badge bg-light text-muted border mb-1" style="font-size: 0.72rem;">{{ $recent->category }}</span>
                    <h6 class="mb-1 fw-bold text-dark" style="font-size: 0.92rem; line-height: 1.4;">{{ $recent->title }}</h6>
                    <small class="text-muted" style="font-size: 0.78rem;">
                      {{ \Carbon\Carbon::parse($recent->published_at)->format('d M, Y') }}
                    </small>
                  </div>
                </a>
              @endforeach
            </div>
          </div>

          <!-- Quick Contact & WhatsApp Widget -->
          <div class="p-4 bg-dark text-white rounded-4 shadow-sm border border-secondary mb-4">
            <span class="badge bg-success text-white px-2 py-1 rounded-pill mb-2" style="font-size: 0.72rem;">Hızlı Yanıt</span>
            <h5 class="fw-bold text-white mb-2">Projenizi Konuşalım</h5>
            <p class="text-white-50 mb-3" style="font-size: 0.9rem; line-height: 1.6;">
              Aklınızdaki web projesi, dinamik panel veya entegrasyon için hemen iletişime geçebilirsiniz.
            </p>
            <div class="d-flex flex-column gap-2 mb-3">
              <small class="text-white-50">E-posta: <strong class="text-white">kayacan.serap@gmail.com</strong></small>
              <small class="text-white-50">Telefon: <strong class="text-white">+90 541 560 07 27</strong></small>
            </div>
            <a href="https://wa.me/905415600727" target="_blank" rel="noopener"
               class="btn btn-success w-100 rounded-pill py-2.5 fw-semibold d-flex align-items-center justify-content-center gap-2">
              <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
              <span>WhatsApp'tan Yazın</span>
            </a>
          </div>

          <!-- Solutions / Services Quick Links -->
          <div class="p-4 bg-light rounded-4 border">
            <h5 class="fw-bold mb-3 text-dark">Çözüm Alanlarımız</h5>
            <div class="d-flex flex-column gap-2">
              <a href="{{ route('services-category.index') }}" class="p-2.5 bg-white rounded-3 border text-decoration-none text-dark d-flex align-items-center justify-content-between transition-hover">
                <span class="fw-medium" style="font-size: 0.9rem;">Kurumsal Web Siteleri</span>
                <span class="text-primary">&rarr;</span>
              </a>
              <a href="{{ route('services-category.index') }}" class="p-2.5 bg-white rounded-3 border text-decoration-none text-dark d-flex align-items-center justify-content-between transition-hover">
                <span class="fw-medium" style="font-size: 0.9rem;">Özel Dinamik Paneller</span>
                <span class="text-primary">&rarr;</span>
              </a>
              <a href="{{ route('services-category.index') }}" class="p-2.5 bg-white rounded-3 border text-decoration-none text-dark d-flex align-items-center justify-content-between transition-hover">
                <span class="fw-medium" style="font-size: 0.9rem;">Teknik SEO &amp; Hız</span>
                <span class="text-primary">&rarr;</span>
              </a>
              <a href="{{ route('references.index') }}" class="p-2.5 bg-white rounded-3 border text-decoration-none text-dark d-flex align-items-center justify-content-between transition-hover">
                <span class="fw-medium" style="font-size: 0.9rem;">Referanslar &amp; Projeler</span>
                <span class="text-primary">&rarr;</span>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

@endsection

@extends('frontend.layouts.master')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-4">
      <div class="text-center text-white">
        <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-3" style="font-size: 0.85rem;">
          {{ $service->getCategory->title ?? 'Web Geliştirme Hizmeti' }}
        </span>
        <h1 class="display-4 fw-bold text-white mb-3">{{ $service->title }}</h1>
        <p class="text-white-50 fs-5 mb-0 col-lg-8 mx-auto">
          {{ $service->sort_detail }}
        </p>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <section class="py-4">
    <div class="container">
      <div class="row g-5">
        
        <!-- Main Content -->
        <div class="col-lg-8">
          <div class="card rounded-4 border-0 shadow-sm p-4 p-md-5 bg-white mb-4">
            
            <div class="d-flex align-items-center gap-3 pb-3 mb-4 border-bottom">
              <div class="rounded-circle bg-light p-3 text-primary">
                <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
              </div>
              <div>
                <h3 class="fw-bold mb-0 text-dark">{{ $service->title }}</h3>
                <small class="text-muted">Kayacan Yazılım &bull; Profesyonel Yazılım Çözümleri</small>
              </div>
            </div>

            <div class="service-content" style="font-size: 1.05rem; line-height: 1.8; color: #444;">
              {!! $service->detail !!}
            </div>

            <div class="p-4 rounded-4 bg-light border mt-5">
              <h5 class="fw-bold mb-2">Bu Hizmet Kapsamında Neler Sunuyoruz?</h5>
              <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                <li class="d-flex align-items-center gap-2">
                  <span class="text-success fw-bold">&check;</span>
                  <span>Şirketinize ve sektörünüze özel modern, responsive tasarım</span>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <span class="text-success fw-bold">&check;</span>
                  <span>Temiz, modüler ve güvenli yazılım mimarisi</span>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <span class="text-success fw-bold">&check;</span>
                  <span>Google teknik SEO ve Core Web Vitals performans optimizasyonu</span>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <span class="text-success fw-bold">&check;</span>
                  <span>WhatsApp hızlı randevu ve teklif iletişim entegrasyonu</span>
                </li>
                <li class="d-flex align-items-center gap-2">
                  <span class="text-success fw-bold">&check;</span>
                  <span>Canlıya alma sonrası hosting ve teknik destek</span>
                </li>
              </ul>
            </div>

            <div class="d-flex flex-wrap gap-3 mt-4 pt-3">
              <a href="{{ route('contact.index') }}" class="btn btn-dark rounded-pill px-4 py-2 fw-semibold">
                Bu Hizmet İçin Teklif Alın &rarr;
              </a>
              <a href="https://wa.me/905415600727" target="_blank" class="btn btn-success rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
                <span>WhatsApp'tan Sorun</span>
              </a>
            </div>

          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <div class="p-4 bg-light rounded-4 border mb-4">
            <h5 class="fw-bold mb-3 text-dark">Diğer Hizmetler</h5>
            @php
              $otherServices = \App\Models\Service::where('is_active', true)->where('id', '!=', $service->id)->take(5)->get();
            @endphp
            <div class="d-flex flex-column gap-3">
              @foreach($otherServices as $other)
                <a href="{{ route('services-detail.show', $other->slug) }}"
                   class="p-3 bg-white rounded-3 border text-decoration-none text-dark d-flex align-items-center justify-content-between transition-hover">
                  <div>
                    <h6 class="mb-0 fw-semibold">{{ $other->title }}</h6>
                    <small class="text-muted" style="font-size: 0.78rem;">Detayları Gör</small>
                  </div>
                  <span class="text-primary">&rarr;</span>
                </a>
              @endforeach
            </div>
          </div>

          <!-- Quick Info Box -->
          <div class="p-4 bg-dark text-white rounded-4 shadow-sm border border-secondary">
            <h5 class="fw-bold text-white mb-2">Hızlı İletişim</h5>
            <p class="text-white-50 mb-3" style="font-size: 0.9rem;">
              Projenizle ilgili hemen bir soru sormak veya görüşmek ister misiniz?
            </p>
            <div class="d-flex flex-column gap-2 mb-3">
              <small class="text-white-50">E-posta: <strong class="text-white">kayacan.serap@gmail.com</strong></small>
              <small class="text-white-50">Telefon: <strong class="text-white">+90 541 560 07 27</strong></small>
            </div>
            <a href="https://wa.me/905415600727" target="_blank" class="btn btn-success w-100 rounded-pill py-2 fw-semibold d-flex align-items-center justify-content-center gap-2">
              <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
              <span>WhatsApp İletişim</span>
            </a>
          </div>

        </div>

      </div>
    </div>
  </section>

@endsection

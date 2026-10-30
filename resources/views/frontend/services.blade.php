@extends('frontend.layouts.master')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-4 text-center">
      <div class="d-inline-flex align-items-center gap-2 bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-1 rounded-pill mb-3">
        <span class="text-white text-uppercase fw-semibold" style="letter-spacing: 1.5px; font-size: 0.75rem;">Web Geliştirme Çözümleri</span>
      </div>
      <h1 class="display-4 fw-bold text-white mb-3">{{ $serviceCategory->title }}</h1>
      <p class="text-white-50 fs-5 mb-0 col-lg-8 mx-auto">
        {{ $serviceCategory->description ?: 'Şirketlerin dijital dönüşümünü hızlandıran, yüksek performanslı ve modern web teknolojileri.' }}
      </p>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Services Grid -->
  <div class="container py-4 mb-5">
    <div class="row g-4">
      @forelse($services as $service)
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="card h-100 rounded-4 border-0 shadow-sm p-4 bg-white d-flex flex-column justify-content-between transition-hover">
            <div>
              <div class="d-inline-flex p-3 rounded-circle bg-light text-primary mb-3">
                <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
              </div>
              <h4 class="fw-bold mb-3 text-dark">{{ $service->title }}</h4>
              <p class="text-muted mb-4" style="line-height: 1.7; font-size: 0.95rem;">
                {{ $service->sort_detail }}
              </p>
            </div>
            <div class="pt-3 border-top">
              <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"
                 class="btn btn-outline-dark w-100 rounded-pill py-2 fw-semibold d-flex align-items-center justify-content-center gap-2">
                <span>Detayları İncele</span>
                <span>&rarr;</span>
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center py-5">
          <p class="text-muted">Bu kategoride henüz hizmet listelenmemiştir.</p>
        </div>
      @endforelse
    </div>
  </div>

  <!-- CTA Box -->
  <div class="container-fluid py-5 my-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-3">
      <div class="row align-items-center justify-content-between g-4">
        <div class="col-lg-8 text-white">
          <h2 class="display-6 fw-bold text-white mb-2">Şirketiniz İçin Özel Bir Çözüm mü Arıyorsunuz?</h2>
          <p class="fs-5 text-white-50 mb-0">
            Hizmetlerimiz ve fiyatlandırma seçenekleri hakkında detaylı bilgi almak için hemen iletişime geçin.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold text-uppercase">
            Teklif Alın &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection

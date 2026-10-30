@extends('frontend.layouts.master')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-4 text-center">
      <div class="d-inline-flex align-items-center gap-2 bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-1 rounded-pill mb-3">
        <span class="text-white text-uppercase fw-semibold" style="letter-spacing: 1.5px; font-size: 0.75rem;">Web Çözümleri</span>
      </div>
      <h1 class="display-4 fw-bold text-white mb-3">Hizmetlerimiz &amp; Uzmanlık Alanlarımız</h1>
      <p class="text-white-50 fs-5 mb-0 col-lg-8 mx-auto">
        Şirketinizin ihtiyaçlarına yönelik modern kurumsal web siteleri, dinamik yönetim panelleri ve özel yazılım çözümleri.
      </p>
    </div>
  </div>
  <!-- Page Header End -->

  <div class="container py-4 mb-5">
    @foreach($serviceCategories as $index => $cat)
      <div class="row g-5 align-items-center mb-5 pb-5">
        <div class="col-lg-5" data-aos="fade-right">
          <div class="p-5 rounded-5 shadow-sm text-center position-relative overflow-hidden"
               style="background: linear-gradient(135deg, #1f2421 0%, #2b2d42 100%); min-height: 340px;">
            <div class="d-flex flex-column align-items-center justify-content-center h-100 text-white">
              <div class="d-inline-flex p-3 rounded-circle bg-white bg-opacity-10 mb-3">
                <svg width="60" height="60" fill="#F0756C" viewBox="0 0 24 24">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                </svg>
              </div>
              <h3 class="fw-bold mb-2 text-white">{{ $cat->title }}</h3>
              <p class="text-white-50 fs-6 mb-0">{{ $cat->services->count() }} Hizmet Modülü</p>
            </div>
          </div>
        </div>

        <div class="col-lg-7" data-aos="fade-left">
          <h2 class="fw-bold mb-3 text-dark">{{ $cat->title }}</h2>
          <p class="text-muted fs-5 mb-4" style="line-height: 1.8;">
            {{ $cat->description ?: 'Şirketlerin dijital dönüşümünü hızlandıran, yüksek performanslı, mobil uyumlu ve modern web teknolojileri.' }}
          </p>

          @if($cat->services->where('is_active', true)->count() > 0)
            <div class="row g-3 mb-4">
              @foreach($cat->services->where('is_active', true) as $service)
                <div class="col-md-6">
                  <a href="{{ route('services-detail.show', ['slug' => $service->slug]) }}"
                     class="p-3 bg-light rounded-3 text-dark text-decoration-none fw-semibold border d-flex align-items-center justify-content-between transition-hover">
                    <span>{{ $service->title }}</span>
                    <span class="text-primary">&rarr;</span>
                  </a>
                </div>
              @endforeach
            </div>
          @endif

          <div>
            <a href="{{ route('services.byCategory', ['slug' => $cat->slug]) }}"
               class="btn btn-dark rounded-pill px-4 py-2 fw-semibold">
              Tüm Hizmet Detaylarını İncele &rarr;
            </a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- CTA Box -->
  <div class="container-fluid py-5 my-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-3">
      <div class="row align-items-center justify-content-between g-4">
        <div class="col-lg-8 text-white">
          <h2 class="display-6 fw-bold text-white mb-2">Hizmetlerimiz Hakkında Bilgi &amp; Teklif Alın</h2>
          <p class="fs-5 text-white-50 mb-0">Size özel teklif ve detaylı fiyatlandırma için bizimle hemen iletişime geçin.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold text-uppercase">
            Bize Ulaşın &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection

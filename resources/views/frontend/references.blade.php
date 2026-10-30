@extends('frontend.layouts.master')
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-4 text-center">
      <div class="d-inline-flex align-items-center gap-2 bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-1 rounded-pill mb-3">
        <span class="text-white text-uppercase fw-semibold" style="letter-spacing: 1.5px; font-size: 0.75rem;">Portföy &bull; Vaka Analizleri</span>
      </div>
      <h1 class="display-4 fw-bold text-white mb-3">Tamamlanan Projeler &amp; Referanslar</h1>
      <p class="text-white-50 fs-5 mb-0 col-lg-8 mx-auto">
        Şirketler ve markalar için tasarladığımız, geliştirdiğimiz ve yayına aldığımız canlı kurumsal web siteleri ve yönetim panelleri.
      </p>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Flagship Projects Section -->
  <div class="container py-4">
    <div class="row g-5">
      @forelse($references as $ref)
        <div class="col-lg-12">
          <div class="card rounded-4 border-0 shadow-sm overflow-hidden bg-white">
            <div class="row g-0 align-items-stretch">
              <div class="col-lg-5 p-5 d-flex flex-column align-items-center justify-content-center text-center position-relative"
                   style="background: {{ $ref->card_gradient }}; min-height: 280px;">
                <span class="badge bg-danger position-absolute top-0 start-0 m-4 px-3 py-2 rounded-pill">
                  {{ $ref->badge ?? 'Canlı Kurumsal Web Sitesi' }}
                </span>
                <div class="px-4 py-2 rounded-3 bg-white shadow-sm d-inline-flex align-items-center justify-content-center mb-3" style="min-width: 160px; height: 75px;">
                  <img src="{{ $ref->image_url }}"
                       alt="{{ $ref->name }}" class="img-fluid" style="max-height: 55px; max-width: 200px; object-fit: contain;">
                </div>
                @if($ref->host)
                  <span class="text-white-50 fs-6">{{ $ref->host }}</span>
                @endif
              </div>
              <div class="col-lg-7 p-4 p-md-5 d-flex flex-column justify-content-between">
                <div>
                  <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge bg-light text-dark border">{{ $ref->category_label }}</span>
                    @if($ref->location)
                      <span class="badge bg-light text-dark border">{{ $ref->location }}</span>
                    @endif
                  </div>
                  <h3 class="fw-bold mb-3">{{ $ref->name }}</h3>
                  <p class="text-muted mb-4" style="line-height: 1.8; font-size: 1.02rem;">
                    {{ $ref->description }}
                  </p>
                  <div class="d-flex flex-wrap gap-2 mb-4">
                    @foreach($ref->tech_list as $tech)
                      <span class="badge bg-dark text-white px-3 py-2">{{ $tech }}</span>
                    @endforeach
                  </div>
                </div>
                <div>
                  <a href="{{ $ref->url ?? '#' }}" target="{{ $ref->url ? '_blank' : '_self' }}" rel="noopener"
                     class="btn btn-dark rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                    <span>Web Sitesine Git ({{ $ref->host ?? 'Site' }})</span>
                    <span class="fs-5">&nearr;</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center text-muted py-5">
          Henüz referans projesi bulunmuyor.
        </div>
      @endforelse
    </div>
  </div>

  <!-- Brands / Trust Logos -->
  <div class="container py-5 my-3">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="text-primary text-uppercase fw-semibold" style="letter-spacing: 2px;">Çalıştığım Kurumlar &amp; Markalar</span>
      <h2 class="display-6 fw-bold mt-2">Bize Güvenen Şirketler</h2>
    </div>
    
    <div class="row g-4 align-items-center justify-content-center">
      <div class="col-md-4 col-sm-6 text-center">
        <div class="p-4 bg-light rounded-4 border h-100 d-flex flex-column align-items-center justify-content-center" style="min-height: 130px;">
          <img src="{{ asset('assets/frontend/images/projects/smartgrup_logo.webp') }}" alt="Smart Grup" style="max-height: 60px; max-width: 180px; object-fit: contain;">
          <small class="text-muted mt-2 fw-semibold">Smart Grup Güvenlik &amp; Temizlik</small>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 text-center">
        <div class="p-4 bg-light rounded-4 border h-100 d-flex flex-column align-items-center justify-content-center" style="min-height: 130px;">
          <img src="{{ asset('assets/frontend/images/projects/sultan_logo.webp') }}" alt="Sultan Evde Sağlık" style="max-height: 55px; max-width: 200px; object-fit: contain;">
          <small class="text-muted mt-2 fw-semibold">Özel Sultan Evde Sağlık</small>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 text-center">
        <div class="p-4 bg-light rounded-4 border h-100 d-flex flex-column align-items-center justify-content-center" style="min-height: 130px;">
          <img src="{{ asset('assets/frontend/images/projects/anadolu_tadilat_logo.png') }}" alt="Anadolu Tadilat" style="max-height: 55px; max-width: 180px; object-fit: contain;">
          <small class="text-muted mt-2 fw-semibold">Anadolu Tadilat &amp; Dekorasyon</small>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA Box -->
  <div class="container-fluid py-5 my-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-3">
      <div class="row align-items-center justify-content-between g-4">
        <div class="col-lg-8 text-white">
          <h2 class="display-6 fw-bold text-white mb-2">Siz de Referanslarım Arasında Yer Alın</h2>
          <p class="fs-5 text-white-50 mb-0">
            Şirketiniz için modern kurumsal web sitesi, yönetim paneli veya özel yazılım çözümü için hemen iletişime geçin.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-semibold text-uppercase">
            İletişime Geçin &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection

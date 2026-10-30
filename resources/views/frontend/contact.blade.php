@extends('frontend.layouts.master')
@section('content')

<!-- Contact Start -->
<section id="contact-content" class="py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" data-aos="fade-up" style="max-width: 700px;">
            <span class="text-primary text-uppercase fw-semibold" style="letter-spacing: 2px;">Bize Ulaşın</span>
            <h1 class="display-4 fw-bold mt-2 mb-3">Projeleriniz İçin Bir Mesaj Kadar Yakınız</h1>
            <p class="text-muted fs-5">
                Şirketiniz için yeni bir web sitesi geliştirmek, teklif almak veya kurumsal yazılım danışmanlığı için dilediğiniz zaman iletişime geçebilirsiniz.
            </p>
        </div>

        <div class="row g-5 align-items-stretch">
            <!-- Contact Info Cards -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="d-flex flex-column gap-3 h-100">
                    
                    <!-- Phone / WhatsApp -->
                    <a href="https://wa.me/905415600727" target="_blank" rel="noopener" class="text-decoration-none">
                        <div class="bg-light d-flex align-items-center w-100 p-4 rounded-4 contact-card transition-hover border">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-success text-white rounded-circle" style="width: 50px; height: 50px;">
                                <svg width="24" height="24"><use xlink:href="#whatsapp"></use></svg>
                            </div>
                            <div class="ms-4">
                                <p class="mb-1 text-muted" style="font-size: 0.85rem;">Telefon &bull; WhatsApp</p>
                                <h5 class="mb-0 fw-bold text-dark">+90 541 560 07 27</h5>
                                <small class="text-success fw-medium">Hızlı WhatsApp Mesajı Başlat &rarr;</small>
                            </div>
                        </div>
                    </a>

                    <!-- Email -->
                    <a href="mailto:kayacan.serap@gmail.com" class="text-decoration-none">
                        <div class="bg-light d-flex align-items-center w-100 p-4 rounded-4 contact-card transition-hover border">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white rounded-circle" style="width: 50px; height: 50px;">
                                <svg width="22" height="22"><use xlink:href="#envelope"></use></svg>
                            </div>
                            <div class="ms-4">
                                <p class="mb-1 text-muted" style="font-size: 0.85rem;">E-posta Adresi</p>
                                <h5 class="mb-0 fw-bold text-dark">kayacan.serap@gmail.com</h5>
                                <small class="text-primary fw-medium">Doğrudan E-posta Gönder &rarr;</small>
                            </div>
                        </div>
                    </a>

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/serap-kayacan-3ba481207" target="_blank" rel="noopener" class="text-decoration-none">
                        <div class="bg-light d-flex align-items-center w-100 p-4 rounded-4 contact-card transition-hover border">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark text-white rounded-circle" style="width: 50px; height: 50px;">
                                <svg width="22" height="22"><use xlink:href="#linkedin"></use></svg>
                            </div>
                            <div class="ms-4">
                                <p class="mb-1 text-muted" style="font-size: 0.85rem;">LinkedIn Profili</p>
                                <h6 class="mb-0 fw-bold text-dark">Kayacan Yazılım LinkedIn</h6>
                                <small class="text-muted">Profili İncele &rarr;</small>
                            </div>
                        </div>
                    </a>

                    <!-- GitHub -->
                    <a href="https://github.com/SerapKayacan" target="_blank" rel="noopener" class="text-decoration-none">
                        <div class="bg-light d-flex align-items-center w-100 p-4 rounded-4 contact-card transition-hover border">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark text-white rounded-circle" style="width: 50px; height: 50px;">
                                <svg width="22" height="22"><use xlink:href="#github"></use></svg>
                            </div>
                            <div class="ms-4">
                                <p class="mb-1 text-muted" style="font-size: 0.85rem;">GitHub Portföyü</p>
                                <h6 class="mb-0 fw-bold text-dark">github.com/SerapKayacan</h6>
                                <small class="text-muted">Kod Repolarını Gör &rarr;</small>
                            </div>
                        </div>
                    </a>

                    <!-- Location & Working Info -->
                    <div class="bg-light p-4 rounded-4 border">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="text-muted fw-medium" style="font-size: 0.9rem;">📍 Konum: İstanbul, Türkiye</span>
                            <span class="badge bg-success">Hızlı Yanıt</span>
                        </div>
                        <p class="text-muted mb-0" style="font-size: 0.88rem;">Haftanın her günü projeleriniz ve kurumsal yazılım talepleriniz için bize ulaşabilirsiniz.</p>
                    </div>

                </div>
            </div>
            
            <!-- Message / Quote Form -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border h-100 d-flex flex-column justify-content-center">
                    <h3 class="display-6 fw-bold mb-2">Hemen Teklif &amp; Bilgi Alın</h3>
                    <p class="mb-4 text-muted">
                        Şirketinizin web sitesi veya yazılım gereksinimleri hakkında formu doldurarak bize yazabilirsiniz. En kısa sürede geri dönüş yapacağız.
                    </p>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapat"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-3 bg-light border" id="name" name="name" required placeholder="Adınız Soyadınız">
                                    <label for="name">Adınız Soyadınız / Firma *</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control rounded-3 bg-light border" id="email" name="email" required placeholder="E-posta Adresiniz">
                                    <label for="email">E-posta Adresiniz *</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-3 bg-light border" id="subject" name="subject" placeholder="Konu">
                                    <label for="subject">Konu (Örn: Web Sitesi Teklifi)</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control rounded-3 bg-light border" placeholder="Mesajınızı buraya yazın" id="message" name="message" required style="height: 160px"></textarea>
                                    <label for="message">Mesajınız &amp; Proje Detayları *</label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button class="btn btn-dark btn-lg rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 fw-semibold" type="submit">
                                    <span>Mesajı Gönder</span>
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

<!-- Map / Istanbul Location Info Section -->
<section id="map" class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="rounded-5 overflow-hidden shadow-sm border" style="position: relative;">
            <iframe class="w-100 d-block" style="height: 380px; border:0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192697.7932766347!2d28.87175485437198!3d41.00550051659976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1700000000000!5m2!1str!2str"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<style>
    .contact-card.transition-hover {
        transition: all 0.3s ease;
    }
    .contact-card.transition-hover:hover {
        transform: translateY(-4px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.08)!important;
    }
</style>
@endsection

<footer id="footer" class="bg-black text-white py-5">
    <div class="container-sm">
      <div class="row g-md-5 my-4">
        
        <!-- Brand & About -->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <div class="info-box">
            <div class="d-flex align-items-center gap-3 mb-3">
              <a href="{{ route('home') }}" class="d-inline-block">
                <img src="{{ asset('assets/frontend/images/logo-4.png') }}" alt="Kayacan Yazılım" style="height: 48px; width: auto; object-fit: contain;">
              </a>
              <div>
                <h5 class="text-white mb-0 fw-bold">Kayacan Yazılım</h5>
                <small class="text-white-50">Web &amp; Kurumsal Yazılım Çözümleri</small>
              </div>
            </div>
            <p class="text-white-50 py-2 mb-3" style="line-height: 1.7; font-size: 0.95rem;">
              Şirketlerin dijital varlığını güçlendiren modern kurumsal web siteleri, dinamik yönetim panelleri ve SEO odaklı yüksek performanslı web çözümleri geliştiriyoruz.
            </p>
            <div class="social-links d-flex align-items-center gap-2">
              <a href="https://www.linkedin.com/in/serap-kayacan-3ba481207" target="_blank" rel="noopener"
                 class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                 style="width: 38px; height: 38px;" title="LinkedIn">
                <svg width="18" height="18"><use xlink:href="#linkedin"></use></svg>
              </a>
              <a href="https://github.com/SerapKayacan" target="_blank" rel="noopener"
                 class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                 style="width: 38px; height: 38px;" title="GitHub">
                <svg width="18" height="18"><use xlink:href="#github"></use></svg>
              </a>
              <a href="https://wa.me/905415600727" target="_blank" rel="noopener"
                 class="btn btn-outline-success rounded-circle p-2 d-flex align-items-center justify-content-center"
                 style="width: 38px; height: 38px;" title="WhatsApp">
                <svg width="18" height="18"><use xlink:href="#whatsapp"></use></svg>
              </a>
              <a href="mailto:kayacan.serap@gmail.com"
                 class="btn btn-outline-light rounded-circle p-2 d-flex align-items-center justify-content-center"
                 style="width: 38px; height: 38px;" title="Email">
                <svg width="18" height="18"><use xlink:href="#envelope"></use></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-primary fw-bold mb-3 ls-4" style="font-size: 0.85rem;">Hızlı Bağlantılar</h6>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block hover-white" href="{{ route('home') }}">Ana Sayfa</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block hover-white" href="{{ route('about-us.index') }}">Hakkımızda</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block hover-white" href="{{ route('references.index') }}">Tamamlanan Projeler</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block hover-white" href="{{ route('services-category.index') }}">Web Geliştirme Hizmetleri</a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block hover-white" href="{{ route('contact.index') }}">İletişim &amp; Teklif</a>
            </li>
          </ul>
        </div>

        <!-- Expertise & Solutions -->
        <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
          <h6 class="text-uppercase text-primary fw-bold mb-3 ls-4" style="font-size: 0.85rem;">Çözümlerimiz</h6>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block" href="{{ route('services-category.index') }}">
                Kurumsal Web Siteleri
              </a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block" href="{{ route('services-category.index') }}">
                Dinamik Yönetim Panelleri
              </a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-white-50 d-inline-block" href="{{ route('services-category.index') }}">
                Teknik SEO &amp; Hız
              </a>
            </li>
            <li class="mb-2">
              <a class="text-decoration-none text-primary fw-semibold d-inline-block" href="{{ route('references.index') }}">
                Tüm Referanslar &rarr;
              </a>
            </li>
          </ul>
        </div>

        <!-- Contact Box -->
        <div class="col-lg-3 col-md-6">
          <h6 class="text-uppercase text-primary fw-bold mb-3 ls-4" style="font-size: 0.85rem;">Doğrudan İletişim</h6>
          <p class="text-white-50 mb-3" style="font-size: 0.95rem;">
            Şirketiniz için yeni bir web sitesi veya özel yazılım çözümü için hemen iletişime geçebilirsiniz.
          </p>
          <div class="mb-2">
            <small class="text-white-50 d-block">E-posta:</small>
            <a href="mailto:kayacan.serap@gmail.com" class="text-white text-decoration-none fw-semibold">
              kayacan.serap@gmail.com
            </a>
          </div>
          <div class="mb-3">
            <small class="text-white-50 d-block">Telefon / WhatsApp:</small>
            <a href="https://wa.me/905415600727" target="_blank" class="text-white text-decoration-none fw-semibold">
              +90 541 560 07 27
            </a>
          </div>
          <div>
            <small class="text-white-50 d-block">Konum:</small>
            <span class="text-white">İstanbul, Türkiye</span>
          </div>
        </div>

      </div>
      
      <div class="row pt-4 mt-4 border-top border-secondary">
        <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
          <p class="text-white-50 mb-0" style="font-size: 0.88rem;">
            &copy; {{ date('Y') }} <strong class="text-white">Kayacan Yazılım</strong>. Tüm Hakları Saklıdır. Kurumsal Web &amp; Yazılım Çözümleri.
          </p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <p class="text-white-50 mb-0" style="font-size: 0.88rem;">
            Kayacan Yazılım | Profesyonel Web Tasarımı &amp; Kurumsal Yazılım Çözümleri
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('assets/frontend/js/jquery-1.11.0.min.js') }}"></script> <!-- jquery file-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> <!--cdn link-->
  <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/lightbox.min.js') }}"></script>

  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092" integrity="sha512-UKNk8GbxkABxKcXYuLkO16EleLGUkcvJWtpSNmExE0Too3ZaFAxTscNWEc1OdAv5/BikHawapSCaiD2XCmp+Bw==" data-cf-beacon='{"version":"2024.11.0","token":"317c7824a07c40cb9ae929f34b17c111","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>
</html>

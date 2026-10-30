<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {!! SEO::generate() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!--cdncss link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/lightbox.min.css') }}">

  <!--style sheet-->
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    @if(env('GOOGLE_TAG_ID'))
        <!-- Google tag (gtag.js) -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_TAG_ID') }}">
        </script>

        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', '{{ env('GOOGLE_TAG_ID') }}');
        </script>
    @endif

</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="skype" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M15.14 11.813a5.076 5.076 0 0 0-1.292-.593c-.28-.085-.59-.168-.91-.247c-.28-.078-.612-.158-1.022-.248a9.315 9.315 0 0 1-1.436-.424a1.496 1.496 0 0 1-.616-.447a.843.843 0 0 1-.16-.566a.967.967 0 0 1 .205-.597a1.598 1.598 0 0 1 .7-.475A4.012 4.012 0 0 1 12.031 8a3.787 3.787 0 0 1 1.106.146a2.083 2.083 0 0 1 .663.322a1.235 1.235 0 0 1 .325.343a1 1 0 1 0 1.761-.948a3.147 3.147 0 0 0-.837-.958a4.006 4.006 0 0 0-1.319-.669A5.768 5.768 0 0 0 12.032 6a5.963 5.963 0 0 0-2.145.35A3.552 3.552 0 0 0 8.31 7.492a2.977 2.977 0 0 0-.604 1.797a2.839 2.839 0 0 0 .58 1.792a3.5 3.5 0 0 0 1.438 1.072a10.582 10.582 0 0 0 1.307.408c.008.003.014.01.022.012c.192.058.498.135.94.23c.173.038.335.079.497.12c.016.004.039.009.054.014l.018.002c.248.064.487.129.706.196a3.023 3.023 0 0 1 .763.344a1.127 1.127 0 0 1 .363.368a1.201 1.201 0 0 1 .118.585a1.152 1.152 0 0 1-.214.732a1.763 1.763 0 0 1-.802.585a3.787 3.787 0 0 1-1.487.252a3.689 3.689 0 0 1-1.703-.344a1.756 1.756 0 0 1-.616-.547a1.016 1.016 0 0 1-.202-.503a1 1 0 0 0-2 0a2.94 2.94 0 0 0 .556 1.64a3.774 3.774 0 0 0 1.342 1.187a5.621 5.621 0 0 0 2.623.567a5.708 5.708 0 0 0 2.254-.405a3.71 3.71 0 0 0 1.665-1.273a3.146 3.146 0 0 0 .584-1.926a3.09 3.09 0 0 0-.375-1.53a3.165 3.165 0 0 0-.997-1.053m7.221 1.878A10.491 10.491 0 0 0 10.31 1.64a6.499 6.499 0 0 0-8.67 8.67a10.491 10.491 0 0 0 12.05 12.05a6.499 6.499 0 0 0 8.67-8.67M16.5 21a4.506 4.506 0 0 1-2.17-.558a1.004 1.004 0 0 0-.677-.106A8.492 8.492 0 0 1 3.5 12a8.583 8.583 0 0 1 .164-1.654a1.003 1.003 0 0 0-.106-.677A4.5 4.5 0 0 1 9.67 3.558a1 1 0 0 0 .678.106A8.492 8.492 0 0 1 20.5 12a8.583 8.583 0 0 1-.164 1.654a1.003 1.003 0 0 0 .106.677A4.499 4.499 0 0 1 16.5 21" />
    </symbol>
    <symbol id="whatsapp" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M16.6 14c-.2-.1-1.5-.7-1.7-.8c-.2-.1-.4-.1-.6.1c-.2.2-.6.8-.8 1c-.1.2-.3.2-.5.1c-.7-.3-1.4-.7-2-1.2c-.5-.5-1-1.1-1.4-1.7c-.1-.2 0-.4.1-.5c.1-.1.2-.3.4-.4c.1-.1.2-.3.2-.4c.1-.1.1-.3 0-.4c-.1-.1-.6-1.3-.8-1.8c-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3c-.6.6-.9 1.3-.9 2.1c.1.9.4 1.8 1 2.6c1.1 1.6 2.5 2.9 4.2 3.7c.5.2.9.4 1.4.5c.5.2 1 .2 1.6.1c.7-.1 1.3-.6 1.7-1.2c.2-.4.2-.8.1-1.2zm2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2c5.5 0 9.9-4.4 9.9-9.9c.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3c-1.5 0-2.9-.4-4.2-1.1l-.3-.2l-3.1.8l.8-3l-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" />
    </symbol>
    <symbol id="github" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M10.07 20.503a1 1 0 0 0-1.18-.983c-1.31.24-2.963.276-3.402-.958a5.708 5.708 0 0 0-1.837-2.415a1.2 1.2 0 0 1-.167-.11a1 1 0 0 0-.93-.645h-.005a1 1 0 0 0-1 .995c-.004.815.81 1.338 1.141 1.514a4.44 4.44 0 0 1 .924 1.36c.365 1.023 1.423 2.576 4.466 2.376l.003.098l.004.268a1 1 0 0 0 2 0l-.005-.318c-.005-.19-.012-.464-.012-1.182M20.737 5.377a5.39 5.39 0 0 0 .09-.42a6.278 6.278 0 0 0-.408-3.293a1.002 1.002 0 0 0-.615-.58c-.356-.12-1.67-.357-4.184 1.25a13.87 13.87 0 0 0-6.354 0C6.762.75 5.455.966 5.102 1.079a.997.997 0 0 0-.631.584a6.3 6.3 0 0 0-.404 3.357c.025.127.051.246.079.354a6.27 6.27 0 0 0-1.256 3.83a8.422 8.422 0 0 0 .043.921c.334 4.603 3.334 5.984 5.424 6.459a4.591 4.591 0 0 0-.118.4a1 1 0 0 0 1.942.479a1.678 1.678 0 0 1 .468-.878a1 1 0 0 0-.546-1.745c-3.454-.395-4.954-1.802-5.18-4.899a6.61 6.61 0 0 1-.033-.738a4.258 4.258 0 0 1 .92-2.713a3.022 3.022 0 0 1 .195-.231a1 1 0 0 0 .188-1.025a3.388 3.388 0 0 1-.155-.555a4.094 4.094 0 0 1 .079-1.616a7.543 7.543 0 0 1 2.415 1.18a1.009 1.009 0 0 0 .827.133a11.777 11.777 0 0 1 6.173.001a1.005 1.005 0 0 0 .83-.138a7.572 7.572 0 0 1 2.406-1.19a4.04 4.04 0 0 1 .087 1.578a3.205 3.205 0 0 1-.169.607a1 1 0 0 0 .188 1.025c.078.087.155.18.224.268A4.122 4.122 0 0 1 20 9.203a7.039 7.039 0 0 1-.038.777c-.22 3.056-1.725 4.464-5.195 4.86a1 1 0 0 0-.546 1.746a1.63 1.63 0 0 1 .466.908a3.06 3.06 0 0 1 .093.82v2.333c-.01.648-.01 1.133-.01 1.356a1 1 0 1 0 2 0c0-.217 0-.692.01-1.34v-2.35a4.882 4.882 0 0 0-.155-1.311a4.256 4.256 0 0 0-.116-.416a6.513 6.513 0 0 0 5.445-6.424A8.697 8.697 0 0 0 22 9.203a6.13 6.13 0 0 0-1.263-3.826" />
    </symbol>
    <symbol id="linkedin" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z" />
    </symbol>
    <symbol id="envelope" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
    </symbol>
    <symbol id="menu" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M4 6a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1m0 12a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1m0-6a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1" />
    </symbol>
    <symbol id="download" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M19.35 10.04C18.67 6.59 15.64 4 12 4C9.11 4 6.6 5.64 5.35 8.04C2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5c0-2.64-2.05-4.78-4.65-4.96zM17 13l-5 5l-5-5h3V9h4v4h3z" />
    </symbol>
  </svg>

  <!-- Sticky Top Header Container with Black Background #000000 -->
  <header id="top" class="fixed-top shadow-sm" style="z-index: 1040; background-color: #000000 !important; border-bottom: 1px solid rgba(255, 255, 255, 0.12);">
    <nav class="navbar navbar-expand-lg py-2 py-lg-3" style="background-color: #000000 !important;">
      <div class="container-fluid px-3 px-md-4 px-xl-5 d-flex align-items-center justify-content-between flex-nowrap">
        
        <!-- Left: Prominent & Bigger Brand Logo -->
        <a class="navbar-brand d-flex align-items-center py-0 me-2 me-lg-4 flex-shrink-0" href="{{ route('home') }}">
          <img src="{{ asset('assets/frontend/images/logo-4.png') }}" class="site-header-logo" alt="Kayacan Yazılım">
        </a>

        <!-- Center: Visible Desktop / Laptop Navbar (Visible on Laptop screens >= 992px) -->
        <div class="d-none d-lg-flex align-items-center justify-content-center gap-1 gap-xl-2 mx-auto flex-nowrap">
          <a class="nav-link nav-desktop-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Ana Sayfa</a>
          <a class="nav-link nav-desktop-link {{ request()->routeIs('references.*') ? 'active' : '' }}" href="{{ route('references.index') }}">Projeler &amp; Referanslar</a>
          <a class="nav-link nav-desktop-link {{ request()->routeIs('about-us.*') ? 'active' : '' }}" href="{{ route('about-us.index') }}">Hakkımızda</a>
          <a class="nav-link nav-desktop-link {{ request()->routeIs('services*') ? 'active' : '' }}" href="{{ route('services-category.index') }}">Hizmetler</a>
          <a class="nav-link nav-desktop-link {{ request()->routeIs('blog.*') ? 'active' : '' }}" href="{{ route('blog.index') }}">Blog</a>
          <a class="nav-link nav-desktop-link {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}">İletişim</a>
        </div>

        <!-- Right: Social Media Icons (Small, Refined, White) + Mobile Hamburger Button -->
        <div class="d-flex align-items-center gap-2 gap-sm-2 flex-shrink-0 ms-auto ms-lg-0">
          
          <!-- Social Media Icons (Refined & Compact 14px SVGs in 32px Circles) -->
          <div class="d-flex align-items-center gap-2">
            <a href="https://wa.me/905415600727" target="_blank" rel="noopener" class="header-social-pill" title="WhatsApp">
              <svg width="14" height="14" aria-hidden="true">
                <use xlink:href="#whatsapp"></use>
              </svg>
            </a>
            <a href="https://github.com/SerapKayacan" target="_blank" rel="noopener" class="header-social-pill" title="GitHub">
              <svg width="14" height="14" aria-hidden="true">
                <use xlink:href="#github"></use>
              </svg>
            </a>
            <a href="https://www.linkedin.com/in/serap-kayacan-3ba481207" target="_blank" rel="noopener" class="header-social-pill" title="LinkedIn">
              <svg width="14" height="14" aria-hidden="true">
                <use xlink:href="#linkedin"></use>
              </svg>
            </a>
            <!-- Email icon shown on >= 420px screens -->
            <a href="mailto:kayacan.serap@gmail.com" class="header-social-pill d-none d-xs-inline-flex d-sm-inline-flex" title="E-posta">
              <svg width="14" height="14" aria-hidden="true">
                <use xlink:href="#envelope"></use>
              </svg>
            </a>
          </div>

          <!-- Mobile Hamburger Menu Button (Kept ONLY for Mobile & Tablet screens < 992px) -->
          <button class="navbar-toggler d-inline-flex d-lg-none border-0 p-1 ms-1 text-white shadow-none" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Menüyü Aç">
            <span class="d-flex align-items-center justify-content-center p-1 rounded" style="background: rgba(255,255,255,0.08);">
              <svg width="26" height="26" style="color: #ffffff; fill: #ffffff;">
                <use xlink:href="#menu"></use>
              </svg>
            </span>
          </button>
        </div>

        <!-- Offcanvas Drawer for Mobile/Tablet (< 992px) -->
        <div class="offcanvas offcanvas-end text-white d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #000000 !important; z-index: 1055;">
          <div class="offcanvas-header border-bottom border-secondary border-opacity-50 px-4 py-3">
            <a class="navbar-brand d-flex align-items-center py-0" href="{{ route('home') }}">
              <img src="{{ asset('assets/frontend/images/logo-3.png') }}" alt="Logo" style="height: 48px; width: auto; object-fit: contain;">
            </a>
            <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Kapat"></button>
          </div>
          <div class="offcanvas-body d-flex flex-column justify-content-between p-4">
            <ul class="navbar-nav flex-grow-1">
              <li class="nav-item mb-2">
                <a class="nav-link offcanvas-link {{ request()->routeIs('home') ? 'active text-primary' : '' }}" href="{{ route('home') }}">Ana Sayfa</a>
              </li>
              <li class="nav-item mb-2">
                <a class="nav-link offcanvas-link {{ request()->routeIs('references.*') ? 'active text-primary' : '' }}" href="{{ route('references.index') }}">Projeler &amp; Referanslar</a>
              </li>
              <li class="nav-item mb-2">
                <a class="nav-link offcanvas-link {{ request()->routeIs('about-us.*') ? 'active text-primary' : '' }}" href="{{ route('about-us.index') }}">Hakkımızda</a>
              </li>
              <li class="nav-item mb-2">
                <a class="nav-link offcanvas-link {{ request()->routeIs('services*') ? 'active text-primary' : '' }}" href="{{ route('services-category.index') }}">Hizmetler</a>
              </li>
              <li class="nav-item mb-2">
                <a class="nav-link offcanvas-link {{ request()->routeIs('blog.*') ? 'active text-primary' : '' }}" href="{{ route('blog.index') }}">Blog</a>
              </li>
              <li class="nav-item mb-2">
                <a class="nav-link offcanvas-link {{ request()->routeIs('contact.*') ? 'active text-primary' : '' }}" href="{{ route('contact.index') }}">İletişim</a>
              </li>
            </ul>

            <div class="pt-4 border-top border-secondary border-opacity-50">
              <p class="small text-white-50 text-center mb-3">Sosyal Medya &amp; İletişim</p>
              <div class="d-flex flex-wrap gap-2 align-items-center justify-content-center">
                <a href="https://wa.me/905415600727" target="_blank" rel="noopener" class="header-social-pill" title="WhatsApp">
                  <svg width="15" height="15"><use xlink:href="#whatsapp"></use></svg>
                </a>
                <a href="https://github.com/SerapKayacan" target="_blank" rel="noopener" class="header-social-pill" title="GitHub">
                  <svg width="15" height="15"><use xlink:href="#github"></use></svg>
                </a>
                <a href="https://www.linkedin.com/in/serap-kayacan-3ba481207" target="_blank" rel="noopener" class="header-social-pill" title="LinkedIn">
                  <svg width="15" height="15"><use xlink:href="#linkedin"></use></svg>
                </a>
                <a href="mailto:kayacan.serap@gmail.com" class="header-social-pill" title="E-posta">
                  <svg width="15" height="15"><use xlink:href="#envelope"></use></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </nav>
  </header>

  <style>
    /* Top Body Spacing to match fixed black header */
    body {
      padding-top: 88px;
    }
    @media (max-width: 991.98px) {
      body {
        padding-top: 72px;
      }
    }

    /* Brand Logo Sizing - Big & Prominent */
    .site-header-logo {
      height: 72px;
      max-height: 76px;
      width: auto;
      object-fit: contain;
      display: block;
      transition: height 0.2s ease;
    }
    @media (max-width: 1199.98px) {
      .site-header-logo {
        height: 64px;
        max-height: 68px;
      }
    }
    @media (max-width: 991.98px) {
      .site-header-logo {
        height: 48px;
        max-height: 52px;
      }
    }

    /* Desktop / Laptop Navbar Links */
    .nav-desktop-link {
      color: #ffffff !important;
      font-size: 0.86rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      white-space: nowrap;
      padding: 8px 12px !important;
      border-radius: 6px;
      transition: color 0.2s ease, background-color 0.2s ease;
      text-decoration: none;
    }
    @media (max-width: 1199.98px) {
      .nav-desktop-link {
        font-size: 0.80rem;
        padding: 6px 8px !important;
        letter-spacing: 0.3px;
      }
    }
    .nav-desktop-link:hover {
      color: var(--bs-primary, #F0756C) !important;
      background-color: rgba(255, 255, 255, 0.06);
    }
    .nav-desktop-link.active {
      color: var(--bs-primary, #F0756C) !important;
      font-weight: 700;
    }

    /* Refined & Small Social Media Icons */
    .header-social-pill {
      width: 32px;
      height: 32px;
      min-width: 32px;
      min-height: 32px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.10);
      color: #ffffff !important;
      text-decoration: none;
      transition: all 0.25s ease;
    }
    .header-social-pill svg {
      width: 14px !important;
      height: 14px !important;
      color: #ffffff !important;
      fill: #ffffff !important;
      transition: all 0.25s ease;
    }
    .header-social-pill:hover {
      background: var(--bs-primary, #F0756C) !important;
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(240, 117, 108, 0.4);
    }
    .header-social-pill:hover svg {
      color: #ffffff !important;
      fill: #ffffff !important;
    }

    /* Offcanvas Links */
    .offcanvas-link {
      color: #ffffff !important;
      font-size: 1rem;
      font-weight: 600;
      letter-spacing: 1.2px;
      text-transform: uppercase;
      padding: 10px 0;
      transition: color 0.2s ease, transform 0.2s ease;
    }
    .offcanvas-link:hover, .offcanvas-link.active {
      color: var(--bs-primary, #F0756C) !important;
      transform: translateX(4px);
    }
  </style>

  
@extends('frontend.layouts.master')
@section('content')
<section class="padding-medium">
  <div class="container-fluid py-5 mb-5" style="background: linear-gradient(135deg, #111111 0%, #222222 100%);">
    <div class="container py-4 text-center">
      <div class="d-inline-flex align-items-center gap-2 bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-1 rounded-pill mb-3">
        <span class="text-white text-uppercase fw-semibold" style="letter-spacing: 1.5px; font-size: 0.75rem;">Yazılar &bull; İpuçları</span>
      </div>
      <h1 class="display-4 fw-bold text-white mb-3">Web Geliştirme &amp; Teknoloji Yazıları</h1>
      <p class="text-white-50 fs-5 mb-0 col-lg-8 mx-auto">
        Modern web teknolojileri, dinamik yönetim panelleri ve SEO üzerine yazılar ve sektörel deneyimler.
      </p>
    </div>
  </div>
  <div class="container py-4">
      <div class="row mt-5">
        @foreach($blogs as $blog)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="blog-post position-relative overflow-hidden rounded-4">
            <img src="{{ asset($blog->image) }}" class="blog-img img-fluid rounded-4" alt="{{ $blog->title }}" style="width: 100%; height: 450px; object-fit: cover;">
            <div class="position-absolute bottom-0 p-5">
              <a href="{{ route('blog.show', $blog->slug) }}"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">{{ $blog->category }}</span></a>
              <h4 class="display-6 fw-normal mt-2"><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h4>
              <p class="m-0 align-items-center text-white"><svg width="19" height="19" style="fill: white;">
                  <use xlink:href="#clock"></use>
                </svg> {{ \Carbon\Carbon::parse($blog->published_at)->format('d M, Y') }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="mt-4">
        {{ $blogs->links() }}
      </div>
    </div>
</section>
@endsection

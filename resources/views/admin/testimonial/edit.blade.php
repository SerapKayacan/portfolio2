@section('title', 'Müşteri Yorumunu Düzenle')
@extends('admin.layouts.master')
@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Müşteri Yorumunu Düzenle</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Gösterge Paneli</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.testimonial.index') }}" class="text-muted text-hover-primary">Müşteri Yorumları</a>
                        </li>
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <li class="breadcrumb-item text-muted">Yorum Düzenle</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="form" action="{{ route('admin.testimonial.update', $testimonial->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="card card-flush pt-5">
                            <div class="card-body pt-5">
                                <div class="mb-10 row">
                                    <div class="col-sm-4">
                                        <label class="required form-label">Müşteri / Yetkili Adı</label>
                                        <input class="form-control" name="client_name" value="{{ old('client_name', $testimonial->client_name) }}" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="required form-label">Unvan / Pozisyon</label>
                                        <input class="form-control" name="client_title" value="{{ old('client_title', $testimonial->client_title) }}" required>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label">Şirket / Kurum</label>
                                        <input class="form-control" name="company" value="{{ old('company', $testimonial->company) }}">
                                    </div>
                                </div>

                                <div class="mb-10 row">
                                    <div class="col-sm-3">
                                        <label class="form-label">Puan (1 - 5)</label>
                                        <select name="rating" class="form-control">
                                            <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>5 Yıldız (Mükemmel)</option>
                                            <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>4 Yıldız (Çok İyi)</option>
                                            <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>3 Yıldız (Orta)</option>
                                            <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>2 Yıldız</option>
                                            <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>1 Yıldız</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">İnisiyaller (Avatar için)</label>
                                        <input class="form-control" name="initials" value="{{ old('initials', $testimonial->initials) }}" placeholder="Örn: YK (Boş ise addan türetilir)">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">İlgili Proje Adı</label>
                                        <input class="form-control" name="project_name" value="{{ old('project_name', $testimonial->project_name) }}">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Sıra</label>
                                        <input class="form-control" name="sort_order" type="number" value="{{ old('sort_order', $testimonial->sort_order) }}" min="0">
                                    </div>
                                </div>

                                <div class="mb-10 row">
                                    <div class="col-sm-12">
                                        <label class="required form-label">Müşteri Yorumu / Değerlendirme</label>
                                        <textarea class="form-control" name="comment" rows="5" required>{{ old('comment', $testimonial->comment) }}</textarea>
                                    </div>
                                </div>

                                <div class="mb-10 row">
                                    <div class="col-sm-4">
                                        <label class="form-label">Yayın Durumu</label>
                                        <select name="is_active" class="form-control">
                                            <option value="1" {{ $testimonial->is_active ? 'selected' : '' }}>Aktif (Sitede Göster)</option>
                                            <option value="0" {{ !$testimonial->is_active ? 'selected' : '' }}>Pasif (Gizle)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.testimonial.index') }}" class="btn btn-light me-5">Vazgeç</a>
                            <button type="submit" class="btn btn-primary">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

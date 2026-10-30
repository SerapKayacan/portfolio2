<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServicesCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::with('services')->where('is_active', true)->orderBy('sort_order', 'ASC')->get();

        SEOTools::setTitle('Hizmetlerimiz - Kayacan Yazılım | Web & Yazılım Çözümleri');
        SEOTools::setDescription('Kayacan Yazılım tarafından sunulan çözümler: Kurumsal Web Tasarımı, Özel Dinamik Yönetim Panelleri, SEO Optimizasyonu ve Sistem Entegrasyonları.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['web geliştirme hizmetleri', 'kurumsal web sitesi', 'yönetim paneli', 'seo optimizasyonu', 'kayacan yazılım']);

        return view('frontend.services-category', [
            'serviceCategories' => $serviceCategories,
        ]);

    }

}

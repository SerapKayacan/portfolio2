<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Service;
use App\Models\TabPanel;
use App\Models\Blog;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Reference;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::where('is_active', true)->withCount('services')->orderBy('sort_order','ASC')->get();
        $carousels = Carousel::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $tabPanels = TabPanel::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $services = Service::where('is_active', true)->orderBy('sort_order','ASC')->get();
        $blogs = Blog::where('is_active', true)->latest('published_at')->take(4)->get();
        $references = Reference::where('is_active', true)->orderBy('sort_order', 'ASC')->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order', 'ASC')->get();

        SEOTools::setTitle('Kayacan Yazılım | Profesyonel Web & Yazılım Çözümleri');
        SEOTools::setDescription('Kayacan Yazılım - Şirketler için modern kurumsal web siteleri, dinamik yönetim panelleri ve yüksek performanslı web çözümleri geliştiriyoruz.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords([
            'kayacan yazılım', 'web geliştirici', 'kurumsal web sitesi', 'yazılım ajansı',
            'dinamik yönetim paneli', 'smart grup', 'sultan evde sağlık', 'anadolu tadilat'
        ]);

        return view('frontend.home', [
            'serviceCategories' => $serviceCategories,
            'carousels'         => $carousels,
            'tabPanels'         => $tabPanels,
            'services'          => $services,
            'blogs'             => $blogs,
            'references'        => $references,
            'testimonials'      => $testimonials,
        ]);
    }
}

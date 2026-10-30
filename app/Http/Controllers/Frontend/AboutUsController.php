<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutUsController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::withCount('services')->orderBy('sort_order','ASC')->get();

        SEOTools::setTitle('Hakkımızda - Kayacan Yazılım');
        SEOTools::setDescription('Kayacan Yazılım hakkında detaylı bilgi. Şirketler için modern kurumsal web siteleri, dinamik yönetim panelleri ve yüksek performanslı yazılım çözümleri.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['kayacan yazılım', 'hakkımızda', 'web geliştirme', 'yazılım ajansı', 'kurumsal web sitesi']);

        return view('frontend.about-us', [
            'serviceCategories' => $serviceCategories,
        ]);
    }
}

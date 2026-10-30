<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showByCategory($slug, $view = 'frontend.services')
    {
        $serviceCategory = ServiceCategory::where('is_active', true)->where('slug', $slug)->with('services')->firstOrFail();

        SEOTools::setTitle($serviceCategory->title . ' - Kayacan Yazılım');
        SEOTools::setDescription($serviceCategory->meta_description ?: 'Kayacan Yazılım ' . $serviceCategory->title . ' hizmetleri hakkında detaylı bilgi alın.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords($serviceCategory->tags->pluck('name')->toArray() ?: ['web geliştirme', 'yazılım çözümleri', 'kayacan yazılım']);

        return view($view, [
            'serviceCategory' => $serviceCategory,
            'services'        => $serviceCategory->services,
        ]);
    }




}

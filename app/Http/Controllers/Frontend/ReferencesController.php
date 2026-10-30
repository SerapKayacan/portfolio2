<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reference;
use App\Models\Partner;
use Artesaos\SEOTools\Facades\SEOTools;

class ReferencesController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Referanslar & Projeler - Kayacan Yazılım');
        SEOTools::setDescription('Kayacan Yazılım tarafından geliştirilen kurumsal web projeleri ve referanslar: Smart Grup, Sultan Evde Sağlık Hizmetleri, Anadolu Tadilat ve kurumsal çözümler.');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::metatags()->setKeywords(['kayacan yazılım referanslar', 'geliştirilen web siteleri', 'smart grup', 'sultan evde sağlık', 'anadolu tadilat']);

        $references = Reference::where('is_active', true)->orderBy('sort_order')->get();
        $partners = Partner::where('is_active', true)->orderBy('sort_order')->get();

        return view('frontend.references', compact('references', 'partners'));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Service::truncate();
        ServiceCategory::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $category = ServiceCategory::create([
            'title' => 'Web Geliştirme ve Yazılım Çözümleri',
            'slug' => 'web-gelistirme-ve-yazilim-cozumleri',
            'description' => 'Şirketlerin dijital dönüşümünü hızlandıran, yüksek performanslı, mobil uyumlu ve modern web teknolojileri.',
            'is_active' => true,
            'sort_order' => 1
        ]);

        $services = [
            [
                'title' => 'Kurumsal Web Sitesi Geliştirme',
                'summary' => 'Şirketinizin marka değerini yansıtan, modern, hızlı, tüm cihazlarla %100 uyumlu (responsive) ve dönüşüm odaklı kurumsal web siteleri.'
            ],
            [
                'title' => 'Özel Dinamik Yönetim Panelleri',
                'summary' => 'Hizmetlerinizi, ürünlerinizi, blog yazılarınızı ve müşteri mesajlarınızı teknik bilgi gerektirmeden tek tıkla yönetebileceğiniz güvenli admin panelleri.'
            ],
            [
                'title' => 'WhatsApp Randevu & İletişim Entegrasyonları',
                'summary' => 'Sultan Evde Sağlık projesinde olduğu gibi ziyaretçilerinizin doğrudan WhatsApp üzerinden anlık randevu oluşturmasını sağlayan interaktif akışlar.'
            ],
            [
                'title' => 'Teknik SEO & Performans Optimizasyonu',
                'summary' => 'Google arama motoru optimizasyonu (SEO), OpenGraph etiketleri, site haritası ve yüksek sayfa açılış hızları ile aramalarda üst sıralarda yer alma.'
            ],
            [
                'title' => 'Sistem & Servis Entegrasyonları',
                'summary' => 'Mobil uygulamalar veya harici kurumsal platformlarla kesintisiz iletişim sağlayan güvenli servis ve sistem entegrasyonları.'
            ],
            [
                'title' => 'Web Sitesi Yenileme & Bakım',
                'summary' => 'Eski, yavaş veya mobil cihazlarda düzgün çalışmayan mevcut web sitenizi modern kodlama standartlarıyla baştan inşa etme ve teknik bakım desteği.'
            ],
        ];

        foreach ($services as $index => $s) {
            Service::create([
                'category_id' => $category->id,
                'title' => $s['title'],
                'slug' => Str::slug($s['title']),
                'sort_detail' => $s['summary'],
                'detail' => '<p>' . $s['summary'] . '</p><p>Serap Kayacan olarak her projeyi bilgisayar mühendisliği standartlarına, temiz kod prensiplerine ve güncel güvenlik kriterlerine uygun olarak geliştiriyorum. Şirketinizin özel gereksinimleri için hemen iletişime geçebilirsiniz.</p>',
                'is_active' => true,
                'sort_order' => $index + 1
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Reference;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferenceSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Reference::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $references = [
            [
                'name' => 'Smart Grup Özel Güvenlik ve Temizlik Hizmetleri',
                'category' => 'corporate',
                'location' => 'İstanbul',
                'description' => 'Özel güvenlik ve temizlik sektörünün öncüsü için kurumsal web sitesi, hizmet modülleri ve SEO altyapısı (smartgrup.com.tr).'
            ],
            [
                'name' => 'Özel Sultan Evde Sağlık ve Hemşirelik Hizmetleri',
                'category' => 'health',
                'location' => 'İstanbul',
                'description' => 'Evde sağlık ve hemşirelik hizmetleri için Full-Stack web sitesi, WhatsApp hızlı randevu entegrasyonu ve dinamik yönetim paneli (sultanevdesaglikhizmetleri.com).'
            ],
            [
                'name' => 'Anadolu Tadilat, Dekorasyon ve Boya Hizmetleri',
                'category' => 'construction',
                'location' => 'İstanbul',
                'description' => 'Tadilat ve dekorasyon firması için kategori filtreli portföy galerisi, teklif alma altyapısı ve mobil uyumlu kurumsal site (anadolutadilat.com).'
            ],
        ];

        foreach ($references as $i => $data) {
            Reference::create([
                'name'        => $data['name'],
                'category'    => $data['category'],
                'location'    => $data['location'],
                'description' => $data['description'],
                'sort_order'  => $i + 1,
                'is_active'   => true,
            ]);
        }
    }
}

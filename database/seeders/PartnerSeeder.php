<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Partner::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $partners = [
            ['name' => 'Smart Grup Özel Güvenlik ve Temizlik', 'sort_order' => 1, 'is_active' => true],
            ['name' => 'Özel Sultan Evde Sağlık Hizmetleri', 'sort_order' => 2, 'is_active' => true],
            ['name' => 'Anadolu Tadilat & Dekorasyon', 'sort_order' => 3, 'is_active' => true],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Blog::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $blogs = [
            [
                'title' => 'Şirketler İçin Başarılı Bir Web Sitesinin Olmazsa Olmaz 5 Özelliği',
                'category' => 'Web Geliştirme',
                'content' => '<p>Günümüzde bir şirketin ilk izlenimi web sitesinde başlar. Kullanıcıların %75’inden fazlası bir firmanın güvenilirliğini web tasarımının kalitesine göre değerlendirmektedir. Başarılı bir web sitesinde şu 5 temel özellik mutlaka yer almalıdır: 1) Mobil öncelikli (Mobile-First) responsive tasarım, 2) 2 saniyenin altında açılış hızı, 3) Doğrudan WhatsApp veya hızlı teklif akışları, 4) Arama motorlarında bulunabilirliği artıran teknik SEO altyapısı, 5) İçerikleri kolayca güncelleyebileceğiniz dinamik bir yönetim paneli.</p>',
                'image' => 'assets/frontend/images/post-thumb-1.jpg',
            ],
            [
                'title' => 'Kurumsal Şirketler İçin Dinamik Yönetim Panelleri',
                'category' => 'Yazılım Çözümleri',
                'content' => '<p>Kurumsal web uygulamalarında güçlü bir yönetim paneli, şirket operasyonlarının kesintisiz ve hatasız sürmesini sağlar. Kullanıcı dostu arayüz, rol ve izin tabanlı yetkilendirme ve modüler mimari sayesinde kurumsal içerik, ürün, sipariş ve müşteri ilişkilerini yönetmek hem çok güvenli hem de yüksek performanslı hale gelmektedir.</p>',
                'image' => 'assets/frontend/images/post-thumb-2.jpg',
            ],
            [
                'title' => 'Sağlık ve Hizmet Sektöründe WhatsApp Randevu Entegrasyonu',
                'category' => 'Müşteri Dönüşümü',
                'content' => '<p>Özel Sultan Evde Sağlık projesinde bizzat uyguladığımız gibi, sağlık ve acil hizmet sektöründe ziyaretçiyi karmaşık formlarla uğraştırmak yerine tek bir tıkla doğrudan ilgili uzmanla WhatsApp üzerinden buluşturmak dönüşüm oranlarını %300’e varan oranda artırmaktadır. Ziyaretçi istediği hizmet paketini seçip anında WhatsApp randevu mesajı gönderebilmektedir.</p>',
                'image' => 'assets/frontend/images/post-thumb-3.jpg',
            ],
            [
                'title' => 'Teknik SEO Nedir ve Google Sıralamasını Nasıl Etkiler?',
                'category' => 'Arama Motoru Optimizasyonu',
                'content' => '<p>Web sitenizin sadece güzel görünmesi yetmez; potansiyel müşterilerinizin arama motorlarında sizi bulabilmesi gerekir. Doğru başlık (Title) hiyerarşisi, OpenGraph sosyal medya etiketleri, XML site haritası, semantik HTML5 etiketleri ve sayfa hızı optimizasyonu Smart Grup ve Anadolu Tadilat projelerimizde organik arama trafiğini katlayan temel unsurlardır.</p>',
                'image' => 'assets/frontend/images/post-thumb-4.jpg',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create([
                'title'        => $blog['title'],
                'slug'         => Str::slug($blog['title']),
                'category'     => $blog['category'],
                'content'      => $blog['content'],
                'image'        => $blog['image'],
                'is_active'    => true,
                'published_at' => now()->subDays(rand(1, 20)),
            ]);
        }
    }
}

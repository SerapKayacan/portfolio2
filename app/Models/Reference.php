<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Reference extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'location',
        'category',
        'description',
        'url',
        'badge',
        'technologies',
        'gradient',
        'sort_order',
        'is_active',
    ];

    public static function categories(): array
    {
        return [
            'corporate'    => 'Kurumsal Web Sitesi',
            'health'       => 'Sağlık & Medikal',
            'construction' => 'İnşaat & Yapı',
            'ecommerce'    => 'E-Ticaret & Katalog',
            'software'     => 'Özel Yazılım & Panel',
            'security'     => 'Güvenlik & Hizmet',
            'cleaning'     => 'Temizlik & Tesis',
        ];
    }

    public function getCategoryLabelAttribute(): string
    {
        $cats = self::categories();
        return $cats[$this->category] ?? ucfirst($this->category);
    }

    public function getImageUrlAttribute(): string
    {
        if ($this->hasMedia('image')) {
            return $this->getFirstMediaUrl('image');
        }

        $lowerName = mb_strtolower($this->name);
        if (str_contains($lowerName, 'smart') || $this->id == 1) {
            return asset('assets/frontend/images/projects/smartgrup_logo.webp');
        }
        if (str_contains($lowerName, 'sultan') || $this->id == 2) {
            return asset('assets/frontend/images/projects/sultan_logo.webp');
        }
        if (str_contains($lowerName, 'anadolu') || $this->id == 3) {
            return asset('assets/frontend/images/projects/anadolu_tadilat_logo.png');
        }

        return asset('assets/frontend/images/logo-4.png');
    }

    public function getHostAttribute(): ?string
    {
        if (!$this->url) {
            return $this->location;
        }
        $host = parse_url($this->url, PHP_URL_HOST);
        return $host ? str_replace('www.', '', $host) : $this->url;
    }

    public function getTechListAttribute(): array
    {
        if (!$this->technologies) {
            return ['Kurumsal Web', 'Responsive UI', 'Teknik SEO'];
        }
        return array_filter(array_map('trim', explode(',', $this->technologies)));
    }

    public function getCardGradientAttribute(): string
    {
        if ($this->gradient) {
            return $this->gradient;
        }

        $gradients = [
            'linear-gradient(135deg, #0b1a3a 0%, #17346b 100%)',
            'linear-gradient(135deg, #0d3b66 0%, #0077b6 100%)',
            'linear-gradient(135deg, #1f2421 0%, #3a4042 100%)',
            'linear-gradient(135deg, #1a1a2e 0%, #16213e 100%)',
            'linear-gradient(135deg, #2b2d42 0%, #4a4e69 100%)',
        ];

        return $gradients[($this->id ?? 1) % count($gradients)];
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('large')
            ->fit(Manipulations::FIT_MAX, 800, 600);

        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_MAX, 400, 300);
    }
}

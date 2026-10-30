<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_title',
        'company',
        'comment',
        'rating',
        'initials',
        'avatar',
        'project_name',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'rating'    => 'integer',
        'is_active' => 'boolean',
    ];

    public function getComputedInitialsAttribute(): string
    {
        if (!empty($this->initials)) {
            return strtoupper($this->initials);
        }

        $parts = preg_split('/\s+/', trim($this->client_name));
        $init = '';
        foreach ($parts as $p) {
            $init .= mb_substr($p, 0, 1);
            if (mb_strlen($init) >= 2) break;
        }

        return strtoupper($init ?: 'M');
    }
}

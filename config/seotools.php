<?php

return [
    'meta' => [
        'defaults' => [
            'title'        => 'Kayacan Yazılım | Profesyonel Web & Yazılım Çözümleri',
            'titleBefore'  => false,
            'description'  => 'Kayacan Yazılım - Şirketler için modern kurumsal web siteleri, dinamik yönetim panelleri ve yüksek performanslı özel yazılım çözümleri.',
            'separator'    => ' - ',
            'keywords'     => [
                'kayacan yazılım', 'kurumsal web sitesi', 'web yazılım ajansı', 'yönetim paneli',
                'istanbul web tasarım', 'smart grup', 'sultan evde sağlık', 'anadolu tadilat'
            ],
            'canonical'    => 'full',
            'robots'       => 'all',
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'Kayacan Yazılım | Profesyonel Web & Yazılım Çözümleri',
            'description' => 'Şirketler için modern kurumsal web siteleri, dinamik yönetim panelleri ve yüksek performanslı web çözümleri geliştiriyoruz.',
            'url'         => null,
            'type'        => false,
            'site_name'   => 'Kayacan Yazılım',
            'images'      => [],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card' => 'summary',
            'site' => '@KayacanYazilim',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'Kayacan Yazılım | Profesyonel Web & Yazılım Çözümleri',
            'description' => 'Şirketler için modern kurumsal web siteleri, dinamik yönetim panelleri ve yüksek performanslı web çözümleri geliştiriyoruz.',
            'url'         => null,
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];

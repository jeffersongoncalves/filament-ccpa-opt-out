<?php

return [
    'resource' => [
        'label' => 'İmtina',
        'plural_label' => 'İmtinalar',
    ],

    'fields' => [
        'subject' => 'İstehlakçı',
        'right' => 'Hüquq',
        'action' => 'Seçim',
        'created_at' => 'Qeydə alınıb',
        'source' => 'Mənbə',
        'ip_address' => 'IP ünvanı',
        'user_agent' => 'İstifadəçi agenti',
        'metadata' => 'Metaməlumat',
    ],

    'right' => [
        'sale_sharing' => 'Satmayın və paylaşmayın (§1798.120)',
        'limit_sensitive' => 'Həssas şəxsi məlumatları məhdudlaşdırmaq (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'İmtina etdi',
        'opted_in' => 'Razılıq verdi',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control siqnalı',
        'form' => 'Forma',
        'claimed' => 'Girişdən sonra hesaba bağlandı',
    ],

    'filters' => [
        'visitors' => 'Hesabı olmayan ziyarətçilər',
        'gpc' => 'Global Privacy Control siqnalından',
    ],

    'visitor' => 'Ziyarətçi',
];

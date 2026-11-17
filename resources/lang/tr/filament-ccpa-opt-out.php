<?php

return [
    'resource' => [
        'label' => 'Vazgeçme',
        'plural_label' => 'Vazgeçmeler',
    ],

    'fields' => [
        'subject' => 'Tüketici',
        'right' => 'Hak',
        'action' => 'Seçim',
        'created_at' => 'Kaydedilme',
        'source' => 'Kaynak',
        'ip_address' => 'IP adresi',
        'user_agent' => 'Kullanıcı aracısı',
        'metadata' => 'Meta veriler',
    ],

    'right' => [
        'sale_sharing' => 'Satmayın veya paylaşmayın (§1798.120)',
        'limit_sensitive' => 'Hassas kişisel bilgileri sınırla (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Vazgeçti',
        'opted_in' => 'Onay verdi',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control sinyali',
        'form' => 'Form',
        'claimed' => 'Girişten sonra hesaba bağlandı',
    ],

    'filters' => [
        'visitors' => 'Hesabı olmayan ziyaretçiler',
        'gpc' => 'Global Privacy Control sinyalinden',
    ],

    'visitor' => 'Ziyaretçi',
];

<?php

return [
    'resource' => [
        'label' => 'انصراف',
        'plural_label' => 'انصراف‌ها',
    ],

    'fields' => [
        'subject' => 'مصرف‌کننده',
        'right' => 'حق',
        'action' => 'انتخاب',
        'created_at' => 'ثبت‌شده در',
        'source' => 'منبع',
        'ip_address' => 'نشانی IP',
        'user_agent' => 'عامل کاربر',
        'metadata' => 'فراداده',
    ],

    'right' => [
        'sale_sharing' => 'نفروشید یا به اشتراک نگذارید (§1798.120)',
        'limit_sensitive' => 'محدودسازی اطلاعات شخصی حساس (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'انصراف داد',
        'opted_in' => 'موافقت کرد',
    ],

    'sources' => [
        'gpc' => 'سیگنال Global Privacy Control',
        'form' => 'فرم',
        'claimed' => 'پس از ورود به حساب منتقل شد',
    ],

    'filters' => [
        'visitors' => 'بازدیدکنندگان بدون حساب',
        'gpc' => 'از سیگنال Global Privacy Control',
    ],

    'visitor' => 'بازدیدکننده',
];

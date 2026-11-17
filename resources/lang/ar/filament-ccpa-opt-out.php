<?php

return [
    'resource' => [
        'label' => 'الانسحاب',
        'plural_label' => 'طلبات الانسحاب',
    ],

    'fields' => [
        'subject' => 'المستهلك',
        'right' => 'الحق',
        'action' => 'الاختيار',
        'created_at' => 'سُجّل في',
        'source' => 'المصدر',
        'ip_address' => 'عنوان IP',
        'user_agent' => 'وكيل المستخدم',
        'metadata' => 'بيانات وصفية',
    ],

    'right' => [
        'sale_sharing' => 'عدم البيع أو المشاركة (§1798.120)',
        'limit_sensitive' => 'تقييد المعلومات الشخصية الحساسة (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'انسحب',
        'opted_in' => 'وافق',
    ],

    'sources' => [
        'gpc' => 'إشارة Global Privacy Control',
        'form' => 'نموذج',
        'claimed' => 'رُبط بعد تسجيل الدخول',
    ],

    'filters' => [
        'visitors' => 'زوار بدون حساب',
        'gpc' => 'من إشارة Global Privacy Control',
    ],

    'visitor' => 'زائر',
];

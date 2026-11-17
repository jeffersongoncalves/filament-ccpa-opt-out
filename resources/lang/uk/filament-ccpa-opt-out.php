<?php

return [
    'resource' => [
        'label' => 'Відмова',
        'plural_label' => 'Відмови',
    ],

    'fields' => [
        'subject' => 'Споживач',
        'right' => 'Право',
        'action' => 'Вибір',
        'created_at' => 'Записано',
        'source' => 'Джерело',
        'ip_address' => 'IP-адреса',
        'user_agent' => 'User agent',
        'metadata' => 'Метадані',
    ],

    'right' => [
        'sale_sharing' => 'Не продавати й не передавати (§1798.120)',
        'limit_sensitive' => 'Обмежити чутливу персональну інформацію (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Відмовився',
        'opted_in' => 'Надав згоду',
    ],

    'sources' => [
        'gpc' => 'Сигнал Global Privacy Control',
        'form' => 'Форма',
        'claimed' => 'Прив\'язано після входу',
    ],

    'filters' => [
        'visitors' => 'Відвідувачі без облікового запису',
        'gpc' => 'Із сигналу Global Privacy Control',
    ],

    'visitor' => 'Відвідувач',
];

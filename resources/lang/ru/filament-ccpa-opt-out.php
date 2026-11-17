<?php

return [
    'resource' => [
        'label' => 'Отказ',
        'plural_label' => 'Отказы',
    ],

    'fields' => [
        'subject' => 'Потребитель',
        'right' => 'Право',
        'action' => 'Выбор',
        'created_at' => 'Записано',
        'source' => 'Источник',
        'ip_address' => 'IP-адрес',
        'user_agent' => 'User agent',
        'metadata' => 'Метаданные',
    ],

    'right' => [
        'sale_sharing' => 'Не продавать и не передавать (§1798.120)',
        'limit_sensitive' => 'Ограничить чувствительную персональную информацию (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Отказался',
        'opted_in' => 'Дал согласие',
    ],

    'sources' => [
        'gpc' => 'Сигнал Global Privacy Control',
        'form' => 'Форма',
        'claimed' => 'Привязано после входа',
    ],

    'filters' => [
        'visitors' => 'Посетители без учётной записи',
        'gpc' => 'Из сигнала Global Privacy Control',
    ],

    'visitor' => 'Посетитель',
];

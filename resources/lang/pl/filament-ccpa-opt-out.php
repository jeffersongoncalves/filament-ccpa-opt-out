<?php

return [
    'resource' => [
        'label' => 'Sprzeciw',
        'plural_label' => 'Sprzeciwy',
    ],

    'fields' => [
        'subject' => 'Konsument',
        'right' => 'Prawo',
        'action' => 'Wybór',
        'created_at' => 'Zarejestrowano',
        'source' => 'Źródło',
        'ip_address' => 'Adres IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadane',
    ],

    'right' => [
        'sale_sharing' => 'Nie sprzedawaj ani nie udostępniaj (§1798.120)',
        'limit_sensitive' => 'Ograniczenie wrażliwych danych osobowych (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Wyrażono sprzeciw',
        'opted_in' => 'Wyrażono zgodę',
    ],

    'sources' => [
        'gpc' => 'Sygnał Global Privacy Control',
        'form' => 'Formularz',
        'claimed' => 'Przypisano po zalogowaniu',
    ],

    'filters' => [
        'visitors' => 'Odwiedzający bez konta',
        'gpc' => 'Z sygnału Global Privacy Control',
    ],

    'visitor' => 'Odwiedzający',
];

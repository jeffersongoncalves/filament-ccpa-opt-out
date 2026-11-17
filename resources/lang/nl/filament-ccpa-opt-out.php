<?php

return [
    'resource' => [
        'label' => 'Opt-out',
        'plural_label' => 'Opt-outs',
    ],

    'fields' => [
        'subject' => 'Consument',
        'right' => 'Recht',
        'action' => 'Keuze',
        'created_at' => 'Vastgelegd op',
        'source' => 'Bron',
        'ip_address' => 'IP-adres',
        'user_agent' => 'User agent',
        'metadata' => 'Metadata',
    ],

    'right' => [
        'sale_sharing' => 'Niet verkopen of delen (§1798.120)',
        'limit_sensitive' => 'Gevoelige persoonsgegevens beperken (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Afgemeld',
        'opted_in' => 'Aangemeld',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control-signaal',
        'form' => 'Formulier',
        'claimed' => 'Gekoppeld na inloggen',
    ],

    'filters' => [
        'visitors' => 'Bezoekers zonder account',
        'gpc' => 'Via een Global Privacy Control-signaal',
    ],

    'visitor' => 'Bezoeker',
];

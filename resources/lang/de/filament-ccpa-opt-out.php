<?php

return [
    'resource' => [
        'label' => 'Widerspruch',
        'plural_label' => 'Widersprüche',
    ],

    'fields' => [
        'subject' => 'Verbraucher',
        'right' => 'Recht',
        'action' => 'Entscheidung',
        'created_at' => 'Erfasst am',
        'source' => 'Quelle',
        'ip_address' => 'IP-Adresse',
        'user_agent' => 'User Agent',
        'metadata' => 'Metadaten',
    ],

    'right' => [
        'sale_sharing' => 'Nicht verkaufen oder teilen (§1798.120)',
        'limit_sensitive' => 'Sensible personenbezogene Informationen einschränken (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Widersprochen',
        'opted_in' => 'Eingewilligt',
    ],

    'sources' => [
        'gpc' => 'Global-Privacy-Control-Signal',
        'form' => 'Formular',
        'claimed' => 'Nach der Anmeldung übernommen',
    ],

    'filters' => [
        'visitors' => 'Besucher ohne Konto',
        'gpc' => 'Aus einem Global-Privacy-Control-Signal',
    ],

    'visitor' => 'Besucher',
];

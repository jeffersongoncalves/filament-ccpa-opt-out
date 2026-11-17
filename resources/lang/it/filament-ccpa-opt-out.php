<?php

return [
    'resource' => [
        'label' => 'Opt-out',
        'plural_label' => 'Opt-out',
    ],

    'fields' => [
        'subject' => 'Consumatore',
        'right' => 'Diritto',
        'action' => 'Scelta',
        'created_at' => 'Registrato il',
        'source' => 'Origine',
        'ip_address' => 'Indirizzo IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadati',
    ],

    'right' => [
        'sale_sharing' => 'Non vendere né condividere (§1798.120)',
        'limit_sensitive' => 'Limitare le informazioni personali sensibili (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Opt-out esercitato',
        'opted_in' => 'Opt-in esercitato',
    ],

    'sources' => [
        'gpc' => 'Segnale Global Privacy Control',
        'form' => 'Modulo',
        'claimed' => 'Associato dopo l\'accesso',
    ],

    'filters' => [
        'visitors' => 'Visitatori senza account',
        'gpc' => 'Da un segnale Global Privacy Control',
    ],

    'visitor' => 'Visitatore',
];

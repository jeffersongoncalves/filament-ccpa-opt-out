<?php

return [
    'resource' => [
        'label' => 'Opposition',
        'plural_label' => 'Oppositions',
    ],

    'fields' => [
        'subject' => 'Consommateur',
        'right' => 'Droit',
        'action' => 'Choix',
        'created_at' => 'Enregistré le',
        'source' => 'Source',
        'ip_address' => 'Adresse IP',
        'user_agent' => 'User agent',
        'metadata' => 'Métadonnées',
    ],

    'right' => [
        'sale_sharing' => 'Ne pas vendre ni partager (§1798.120)',
        'limit_sensitive' => 'Limiter les informations personnelles sensibles (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'S\'est opposé',
        'opted_in' => 'A consenti',
    ],

    'sources' => [
        'gpc' => 'Signal Global Privacy Control',
        'form' => 'Formulaire',
        'claimed' => 'Rattaché après la connexion',
    ],

    'filters' => [
        'visitors' => 'Visiteurs sans compte',
        'gpc' => 'Issu d\'un signal Global Privacy Control',
    ],

    'visitor' => 'Visiteur',
];

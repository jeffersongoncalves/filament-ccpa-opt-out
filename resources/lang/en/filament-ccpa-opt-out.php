<?php

return [
    'resource' => [
        'label' => 'Opt-out',
        'plural_label' => 'Opt-outs',
    ],

    'fields' => [
        'subject' => 'Consumer',
        'right' => 'Right',
        'action' => 'Choice',
        'created_at' => 'Recorded at',
        'source' => 'Source',
        'ip_address' => 'IP address',
        'user_agent' => 'User agent',
        'metadata' => 'Metadata',
    ],

    'right' => [
        'sale_sharing' => 'Do Not Sell or Share (§1798.120)',
        'limit_sensitive' => 'Limit sensitive personal information (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Opted out',
        'opted_in' => 'Opted in',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control signal',
        'form' => 'Form',
        'claimed' => 'Claimed after login',
    ],

    'filters' => [
        'visitors' => 'Visitors without an account',
        'gpc' => 'From a Global Privacy Control signal',
    ],

    'visitor' => 'Visitor',
];

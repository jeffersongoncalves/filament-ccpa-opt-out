<?php

return [
    'resource' => [
        'label' => 'Opt-out',
        'plural_label' => 'Opt-outs',
    ],

    'fields' => [
        'subject' => 'Consumidor',
        'right' => 'Direito',
        'action' => 'Escolha',
        'created_at' => 'Registrado em',
        'source' => 'Origem',
        'ip_address' => 'Endereço IP',
        'user_agent' => 'User agent',
        'metadata' => 'Metadados',
    ],

    'right' => [
        'sale_sharing' => 'Não vender nem compartilhar (§1798.120)',
        'limit_sensitive' => 'Limitar informações pessoais sensíveis (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Optou por sair',
        'opted_in' => 'Optou por participar',
    ],

    'sources' => [
        'gpc' => 'Sinal Global Privacy Control',
        'form' => 'Formulário',
        'claimed' => 'Vinculado após o login',
    ],

    'filters' => [
        'visitors' => 'Visitantes sem conta',
        'gpc' => 'De um sinal Global Privacy Control',
    ],

    'visitor' => 'Visitante',
];

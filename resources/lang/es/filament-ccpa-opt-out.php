<?php

return [
    'resource' => [
        'label' => 'Exclusión',
        'plural_label' => 'Exclusiones',
    ],

    'fields' => [
        'subject' => 'Consumidor',
        'right' => 'Derecho',
        'action' => 'Elección',
        'created_at' => 'Registrado el',
        'source' => 'Origen',
        'ip_address' => 'Dirección IP',
        'user_agent' => 'Agente de usuario',
        'metadata' => 'Metadatos',
    ],

    'right' => [
        'sale_sharing' => 'No vender ni compartir (§1798.120)',
        'limit_sensitive' => 'Limitar la información personal sensible (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'Se excluyó',
        'opted_in' => 'Aceptó',
    ],

    'sources' => [
        'gpc' => 'Señal Global Privacy Control',
        'form' => 'Formulario',
        'claimed' => 'Vinculado tras iniciar sesión',
    ],

    'filters' => [
        'visitors' => 'Visitantes sin cuenta',
        'gpc' => 'De una señal Global Privacy Control',
    ],

    'visitor' => 'Visitante',
];

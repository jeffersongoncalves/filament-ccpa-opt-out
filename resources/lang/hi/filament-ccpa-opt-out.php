<?php

return [
    'resource' => [
        'label' => 'ऑप्ट-आउट',
        'plural_label' => 'ऑप्ट-आउट',
    ],

    'fields' => [
        'subject' => 'उपभोक्ता',
        'right' => 'अधिकार',
        'action' => 'विकल्प',
        'created_at' => 'दर्ज किया गया',
        'source' => 'स्रोत',
        'ip_address' => 'IP पता',
        'user_agent' => 'यूज़र एजेंट',
        'metadata' => 'मेटाडेटा',
    ],

    'right' => [
        'sale_sharing' => 'न बेचें या साझा न करें (§1798.120)',
        'limit_sensitive' => 'संवेदनशील व्यक्तिगत जानकारी सीमित करें (§1798.121)',
    ],

    'action' => [
        'opted_out' => 'ऑप्ट-आउट किया',
        'opted_in' => 'ऑप्ट-इन किया',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control संकेत',
        'form' => 'फ़ॉर्म',
        'claimed' => 'लॉगिन के बाद जोड़ा गया',
    ],

    'filters' => [
        'visitors' => 'बिना खाते वाले आगंतुक',
        'gpc' => 'Global Privacy Control संकेत से',
    ],

    'visitor' => 'आगंतुक',
];

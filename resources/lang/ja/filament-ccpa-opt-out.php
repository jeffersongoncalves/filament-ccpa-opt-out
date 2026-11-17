<?php

return [
    'resource' => [
        'label' => 'オプトアウト',
        'plural_label' => 'オプトアウト',
    ],

    'fields' => [
        'subject' => '消費者',
        'right' => '権利',
        'action' => '選択',
        'created_at' => '記録日時',
        'source' => '取得元',
        'ip_address' => 'IPアドレス',
        'user_agent' => 'ユーザーエージェント',
        'metadata' => 'メタデータ',
    ],

    'right' => [
        'sale_sharing' => '販売・共有しない（§1798.120）',
        'limit_sensitive' => 'センシティブな個人情報の利用制限（§1798.121）',
    ],

    'action' => [
        'opted_out' => 'オプトアウト済み',
        'opted_in' => 'オプトイン済み',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control シグナル',
        'form' => 'フォーム',
        'claimed' => 'ログイン後に引き継ぎ',
    ],

    'filters' => [
        'visitors' => 'アカウントのない訪問者',
        'gpc' => 'Global Privacy Control シグナルから',
    ],

    'visitor' => '訪問者',
];

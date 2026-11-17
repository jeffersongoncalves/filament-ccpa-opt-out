<?php

return [
    'resource' => [
        'label' => '选择退出',
        'plural_label' => '选择退出记录',
    ],

    'fields' => [
        'subject' => '消费者',
        'right' => '权利',
        'action' => '选择',
        'created_at' => '记录时间',
        'source' => '来源',
        'ip_address' => 'IP 地址',
        'user_agent' => '用户代理',
        'metadata' => '元数据',
    ],

    'right' => [
        'sale_sharing' => '不得出售或共享（§1798.120）',
        'limit_sensitive' => '限制敏感个人信息（§1798.121）',
    ],

    'action' => [
        'opted_out' => '已选择退出',
        'opted_in' => '已选择加入',
    ],

    'sources' => [
        'gpc' => '全球隐私控制（GPC）信号',
        'form' => '表单',
        'claimed' => '登录后认领',
    ],

    'filters' => [
        'visitors' => '无账户的访客',
        'gpc' => '来自全球隐私控制（GPC）信号',
    ],

    'visitor' => '访客',
];

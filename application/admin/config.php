<?php
return [

   'view_replace_str'  =>  [
        '__PUBLIC__'=>SITE_URL.'/public/static/admin',
        '__IMG__'=>SITE_URL.'/public/static',
    ],

    'template'               => [
        // 模板后缀
        'view_suffix'  => 'html',
    ],

    'paginate'               => [
        'type'      => 'bootstrap',
        'var_page'  => 'num',
        'list_rows' => 3,
    ],
    
];

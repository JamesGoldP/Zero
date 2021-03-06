<?php
return [
	'app_debug' => true,
	'url_model' => 2,
    'language' => 'zh-cn',
    'enable_myerror' => true,
    // 后台默认风格
    'admin_style' => 'layui2',
    // 视图输出字符串内容替换
    'view_replace_str' => [
        '__css__'      => 'css',
        '__img__'      => 'images',
        '__js__'       => 'js',
        '__boot__'     => 'bootstrap',
        '__font__'     => 'font',
        '__lay__'      => 'layui',
        '__lib__'      => 'js/lib',
        '__plug__'     => 'js/plugins',
    ],
    // 默认的访问控制器层文件夹
    'url_controller_layer'=> 'controller',
    'url_controller_bussiness'=> 'bussiness',
    'url_controller_model'=> 'model',
    'default_timezone' => 'PRC',
    'app_multi_module' => true,
];
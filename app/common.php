<?php

if(!function_exists('success')) {

    function success(array $data = [], string $message = '操作成功', int $code = 200)
    {
        $res['data'] = $data;
        return json($res, $code);
    }
}

if(!function_exists('fail')) {

    function fail(string $message = '操作失败', int $code = 417, array $data = [])
    {
        $res['statusText'] = $message;
        $res['data'] = $data;
        return json($res, $code);
    }
}

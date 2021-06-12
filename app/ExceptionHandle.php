<?php
namespace app;

use zero\exception\Handle;
use zero\Config;
use zero\response;

class ExceptionHandle extends Handle
{
    public function render(\Exception $e)
    {
        // 添加自定义异常处理机制
        if($e instanceof ValidateException) {
            $data['statusText'] = $e->getError();
            $data['err'] = [];
            return response($data, $code, [], 'json');
        } 
        
        $code = $e->getCode();

        if ( $e instanceof \PDOException ){
            $code = 500;
        }

        $data['statusText'] = $e->getMessage();
        $error['file'] = $e->getFile(); 
        $error['line'] = $e->getLine();
        $trace = $e->getTrace(); 
        
        //args has RECURSION
        if($trace) {
            foreach($trace as $key => $value) {
                unset($trace[$key]['args']);
            }
        }
        $error['trace'] = $trace;
        $data['error'] = $error;
        
        $response = response($data, $code, [], 'json');

        return $response;
        
        // 其它错误交给系统处理
        return parent::render($e);
    }
}
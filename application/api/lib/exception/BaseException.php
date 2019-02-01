<?php
/**
 * Created by 慢慢变蓝
 * Email:iweishusheng@gmail.com
 * Date: 2019-01-26
 * Time: 17:00
 */

namespace app\api\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    public $code='404';
    public $msg='Parameter error';
    public $errorCode='10000';

    public function __construct($params=[]){
        if(!is_array($params)) {
            return;
        }
        if(array_key_exists('code',$params)){
            $this->code=$params-['code'];
        }
        if(array_key_exists('msg',$params)){
            $this->msg=$params['msg'];
        }
        if(array_key_exists('errorCode',$params)){
            $this->errorCode=$params['errorCode'];

        }

    }
}
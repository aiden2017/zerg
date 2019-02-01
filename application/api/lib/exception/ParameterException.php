<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-27
 * Time: 23:04
 */

namespace app\api\lib\exception;


class ParameterException extends BaseException
{
    public $code=400;
    public $msg ='Parameter error';
    public $errorCode=10000;

}
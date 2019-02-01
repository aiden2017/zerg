<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-27
 * Time: 22:11
 */

namespace app\api\lib\exception;

use Exception;
use think\exception\Handle;
use think\facade\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {

            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {

            $this->code = 500;
            $this->msg = 'server error';
            $this->errorCode = 999;
        }

        $request = Request::instance();

        $result = [

            'errorCode' => $this->errorCode,
            'msg' => $this->msg,
            'url' => $request->url(),

        ];

        return json($result,$this->code);

    }

}
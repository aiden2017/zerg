<?php
/**
 * Created by 慢慢变蓝
 * Email:iweishusheng@gmail.com
 * Date: 2019-01-26
 * Time: 17:43
 */

namespace app\api\lib\exception;


class BannerMissException extends BaseException
{
    public $code='404';
    public $msg='banner ID does not exist';
    public $errorCode='40000';

}
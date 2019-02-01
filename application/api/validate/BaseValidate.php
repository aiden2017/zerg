<?php
/**
 * Created by 慢慢变蓝
 * Email:iweishusheng@gmail.com
 * Date: 2019-01-26
 * Time: 14:17
 */

namespace app\api\validate;


use app\api\lib\exception\ParameterException;
use think\facade\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){

        $request  = Request::instance();

        $params = $request->param();

        $result = $this->batch()->check($params);

        if(!$result){

            throw new ParameterException([
                'msg'=>$this->error

            ]);
//            $e->msg=$this->error;
//            throw $e;

        }else{
            return true;
        }
    }

}
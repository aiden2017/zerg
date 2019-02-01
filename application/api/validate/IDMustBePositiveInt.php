<?php
/**
 * Created by 慢慢变蓝
 * Email:iweishusheng@gmail.com
 * Date: 2019-01-26
 * Time: 0:08
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id'=>'require|isPositiveInteger'
    ];

    public function isPositiveInteger($value,$rule='',$data='',$field='')
    {

        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){

            return true ;

        }else{

            return $field.' must be a positiveinteger';
        }

    }

}
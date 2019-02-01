<?php
/**
 * Created by 慢慢变蓝
 * Email:iweishusheng@gmail.com
 * Date: 2019-01-26
 * Time: 15:22
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public static function getBannerByID($id){


//    $result = Db::query('select * from banner_item where banner_id=?',[$id]);

        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
    return $result;




    }
}
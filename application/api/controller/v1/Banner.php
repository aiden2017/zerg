<?php
/**
 * Created by 慢慢变蓝
 * Email:iweishusheng@gmail.com
 * Date: 2019-01-25
 * Time: 0:47
 */

namespace app\api\controller\v1;
use app\api\lib\exception\BannerMissException;
use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;


class banner
{
    public function getBanner($id)
    {

        (new IDMustBePositiveInt())->goCheck();

//        $banner = BannerModel::getBannerByID($id);
        $banner = BannerModel::get($id);

        if(!$banner){

            throw new BannerMissException();
        }

        return $banner;

    }




}
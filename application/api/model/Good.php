<?php

namespace app\api\model;

class Good extends \think\Model
{
    protected $table = 'goods';

    public function specs()
    {
        return $this->hasMany('spec', 'goodsId', 'goods_id');
    }
}

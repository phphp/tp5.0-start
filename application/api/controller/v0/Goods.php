<?php
namespace app\api\controller\v0;

use app\api\model\Good;
use think\Validate;

class Goods
{
    public function show($goodsId)
    {
        $validate = new Validate([
            'goodsId'  => 'require|integer|>=:1',
        ]);
        $data = [
            'goodsId'  => $goodsId,
        ];
        if (!$validate->check($data)) {
            return json([
                'msg' => $validate->getError()
            ]);
        }

        $good = Good::get($goodsId);
        if ($good === null)
            return json(['msg' => 'Good not found.']);
        $good->specs;
        // return Good::getLastSql();

        return json(['data' => $good]);
    }

}

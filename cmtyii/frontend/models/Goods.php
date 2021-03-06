<?php
/**
 * Created by PhpStorm.
 * User: angkebrand
 * Date: 2017/5/3
 * Time: 9:57
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Goods extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%sp_goods}}";
    }

    public function getList($ids)
    {
        //查出所有的分类
        $category = Category::find()->where("shoper_id = :shoper_id and store_id = :store_id",
            [':shoper_id'=>$ids['shoper_id'],':store_id'=>$ids['store_id']])
            ->asArray()
            ->all();
        //查出所有的商品
        $goods = Goods::find()->where("status = 0 and shoper_id = :shoper_id and store_id = :store_id",
            [':shoper_id'=>$ids['shoper_id'],':store_id'=>$ids['store_id']])
            ->select(['id','cate_id','goods_name','sales_price','spec','unit','note'])
            ->asArray()
            ->all();
        //遍历分类数组和商品数组重构一个以分类为二维数组
//        [
//            '分类名称','分类id','商品数组'=>[],
//            '分类名称','分类id','商品数组'=>[],
//        ]
        $data = [];
        $StockModel = new \tea\models\Goods();//实例化茶坊端的商品模型类  用于获取商品的库存
        foreach ($category as $cateK=>$value) {
            $data[$cateK]['cate_name'] = $value['cate_name'];
            $data[$cateK]['cate_id'] = $value['id'];
            foreach ($goods as $goodK=>&$good){
                $good['stock'] = $StockModel->getGoodsStock($good['id']);//获取商品库存
                $good['num'] = 0; //将商品数量设置为0 用户点击选中时再增加
                if($good['cate_id'] == $value['id'] && $good['stock'] != '0'){
                    $data[$cateK]['goods'][] = $good;
                }
            }
        }
        return $data;
    }

}
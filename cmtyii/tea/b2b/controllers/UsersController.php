<?php
/**
 * @link http://www.lrdouble.com/
 * @copyright Copyright (c) 2017 Double Software LLC
 * @license http://www.lrdouble.com/license/
 */

namespace tea\b2b\controllers;

use tea\b2b\models\Cart;
use tea\b2b\models\Order;
use tea\controllers\ObjectController;
use tea\models\Shoper;
use tea\models\Store;
use yii\helpers\ArrayHelper;

class UsersController extends ObjectController
{
    /**
     * 获取首页的个人中心
     * @return array
     */
    public function actionInfo()
    {
        $model = Shoper::find()
            ->andWhere(['id' => \Yii::$app->session->get('shoper_id')])
            ->andWhere(['status' => 0])
            ->select(['credit_remain', 'withdraw_total'])
            ->one();

        $data = Store::find()
            ->select(['sp_name'])
            ->andWhere(['id' => \Yii::$app->session->get('store_id')])
            ->one();
        $datas = ArrayHelper::toArray($model);
        $datas['cart'] = Cart::getCount();
        $datas['order'] = Order::getCount();
        $datas['sp_name'] = $data['sp_name'];
        return ['code' => 1, 'msg' => \Yii::t('app', 'global')['true'], 'data' => $datas];

    }
}
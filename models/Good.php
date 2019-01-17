<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 14.01.2019
 * Time: 22:49
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{

    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods() {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 30);
        }
        return $goods;
    }

    public function getGoodsCategory($id) {
        $catgoods = Yii::$app->cache->get('catgoods');
        if (!$catgoods) {
            $catgoods = Good::find()->where(['category' => $id])->asArray()->all();
            Yii::$app->cache->set('catgoods', $catgoods, 5);
        }

        return $catgoods;
    }
    public function getGoodsSearch($search) {

            $goods = Good::find()->where(['like', 'name', $search])->asArray()->all();

        return $goods;
    }

    public function getOneGood($name) {
        $oneGood = Good::find()->where(['link_name' => $name])->one();
        return $oneGood;
    }



}
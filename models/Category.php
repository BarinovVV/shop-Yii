<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 14.01.2019
 * Time: 23:35
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getCategories() {
        return Category::find()->asArray()->all();

    }

}
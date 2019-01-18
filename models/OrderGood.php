<?php

namespace app\models;

use Yii;


class OrderGood extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'order_good';
    }

    public function getOrder() {
        return $this->hasOne(Order::class, ['id' => 'order_id']);

    }


    public function rules()
    {
        return [
            [['order_id', 'product_id'], 'required'],
            [['order_id', 'product_id', 'price', 'quantity', 'sum'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'name' => 'Name',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'sum' => 'Sum',
        ];
    }
}

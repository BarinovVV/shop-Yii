<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 15.01.2019
 * Time: 23:48
 */

namespace app\controllers;


use app\models\Good;
use yii\base\Controller;

class CartController extends Controller
{
    public function actionAdd($name) {
        $good = new Good();
        $good = $good->getOneGood($name);

        return $this->render('cart', compact('good'));
    }
}
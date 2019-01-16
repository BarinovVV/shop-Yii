<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 15.01.2019
 * Time: 23:48
 */

namespace app\controllers;


use app\models\Good;
use app\models\Cart;
use yii\web\Controller;
use Yii;


class CartController extends Controller
{
    public function actionAdd($name) {
        $good = new Good();
        $good = $good->getOneGood($name);
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
        $cart = new Cart();
        $cart = $cart->addToCart($good);

        return $this->renderPartial('cart', compact('good', 'session'));
    }

    public function actionOpen () {

        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
//        $session->remove('cart.totalQuantity');
//        $session->remove('cart.totalSum');

        return $this->renderPartial('cart', compact('session'));

    }
}
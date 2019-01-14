<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 14.01.2019
 * Time: 22:39
 */

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;

class CategoryController extends Controller
{

    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

}
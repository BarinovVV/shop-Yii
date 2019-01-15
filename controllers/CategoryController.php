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
use Yii;

class CategoryController extends Controller
{

    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id) {
        $goods = new Good();
        $goods = $goods->getGoodsCategory($id);
        return $this->render('view', compact('goods'));

    }

    public function actionSearch() {
        $search = Yii::$app->request->get('search');
        $search = htmlspecialchars($search);
        $goods = new Good();
        $goods = $goods->getGoodsSearch($search);
        return $this->render('search', compact('goods', 'search'));


    }

}
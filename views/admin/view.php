<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = "Заказ № " . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <a class="btn btn-secondary" href="/admin">Вернуть к заказам</a>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить этот заказ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date',
            'name',
            'email:email',
            'phone',
            'address',
            'sum',
            'status',
        ],
    ]) ?>

  <hr>
  <h3>Состав заказа</h3>

  <?
  $goods = $model->orderGoods;

//  foreach ($goods as )
  ?>


  <table class="table table-hover table-striped">
    <thead>
    <tr>
      <th>Наименование</th>
      <th class="text-center">Количество</th>
      <th class="text-center">Цена</th>
      <th class="text-center">Сумма</th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($goods as $item) {?>
      <tr>
        <th><?=$item['name']?></th>
        <td class="text-center"><?=$item['quantity']?></td>
        <td class="text-center"><?=$item['price']?></td>
        <td class="text-center"><?=$item['price']*$item['quantity']?></td>
      </tr>
    <? } ?>
<!--    <tr>-->
<!--      <td colspan="3">ИТОГО:</td>-->
<!--      <td>--><?//=$session['cart.totalQuantity']?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <td colspan="3">Общая сумма:</td>-->
<!--      <td>--><?//=$session['cart.totalSum']?><!--</td>-->
<!--    </tr>-->
    </tbody>
  </table>

</div>

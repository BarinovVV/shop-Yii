<?php
//echo $session['cart'];
//echo"<pre>";
//var_dump($session['cart']);
//echo"</pre>";
if ($session['cart']) {
?>

<h2 style="padding: 10px; text-align: center">Корзина</h2>

<table class="table table-striped">

  <thead>
  <tr>
    <th scope="col">Фото</th>
    <th scope="col">Наименование</th>
    <th scope="col">Количество</th>
    <th scope="col">Цена</th>
    <th scope="col"></th>
  </tr>
  </thead>
  <tbody>
  <? foreach ($session['cart'] as $id => $good) { ?>
  <tr>
    <td style="vertical-align: middle" width="150"><img src="/img/<?=$good['img']?>" alt="<?=$good['name']?>"></td>
    <td style="vertical-align: middle"><?=$good['name']?></td>
    <td style="vertical-align: middle"><?=$good['goodQuantity']?></td>
    <td style="vertical-align: middle"><?=$good['price'] * $good['goodQuantity'] . ' '?>рублей</td>
    <td class="delete text-danger text-center align-middle" data-id="<?=$id?>" style="cursor: pointer"><span>&#10006;</span></td>
  </tr>
  <? }?>
  <tr style="border-top: 4px solid black">
    <td colspan="4">Всего товаров</td>
    <td class="total-quantity"><?=$_SESSION['cart.totalQuantity']?></td>
  </tr>
  <tr>
    <td colspan="4">На сумму </td>
    <td style="font-weight: 700"><?=$session['cart.totalSum']?></td>
  </tr>
  </tbody>
</table>
<div class="modal-buttons" style="display: flex; padding: 15px; justify-content: space-around">
  <button type="button" class="btn btn-danger" onclick="clearCart(event)">Очистить корзину</button>
  <button type=" button" class="btn btn-close btn-secondary">Продолжить покупки</button>
  <button type="button" class="btn btn-success btn-next">Оформить заказ</button>
</div>

<? } else { ?>

<h3 class="mt-5 pl-3 mb-5">В вашей корзине пока ничего нет</h3>
  <button type=" button" class="btn btn-close btn-secondary btn-lg col-3 mx-auto mb-3 mt-5">Начать покупки</button>


<? } ?>


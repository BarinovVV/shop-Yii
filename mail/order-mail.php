<h2 class="text-success">Спасибо за ваш заказ!</h2>

<h3 style="color: #c7254e">Заказ под номером <?=$order->id?> принят </h3>
<p style="text-decoration: underline">Ваш телефон: <?=$order->phone?></p>
<div class="table-responsive">
  <table class="table table-hover table-striped">
      <thead>
      <tr>
          <th>Наименование</th>
          <th>Количество</th>
          <th>Цена</th>
          <th>Сумма</th>
      </tr>
      </thead>
      <tbody>
      <?foreach ($session['cart'] as $id => $item) {?>
      <tr>
          <th><?=$item['name']?></th>
          <td><?=$item['goodQuantity']?></td>
          <td><?=$item['price']?></td>
          <td><?=$item['price']*$item['goodQuantity']?></td>
      </tr>
      <? } ?>
      <tr>
          <td colspan="3">ИТОГО:</td>
          <td><?=$session['cart.totalQuantity']?></td>
      </tr>
      <tr>
          <td colspan="3">Общая сумма:</td>
          <td><?=$session['cart.totalSum']?></td>
      </tr>
      </tbody>
  </table>
</div>
<?

use yii\helpers\Url;

?>

<style>
  .active {
    text-shadow: 1px 1px 0 #fff;
  }
</style>
<div class="container">
    <nav class="nav nav-menu">
        <a class="nav-link" href="/">Всё меню</a>
        <? foreach ($data as $item) {?>
        <a class="nav-link" data-id="<?=$item['cat_name']?>" href="<?=Url::to(['category/view', 'id'=>$item['cat_name']])?>"><?=$item['browser_name']?></a>
        <? } ?>
    </nav>
</div>
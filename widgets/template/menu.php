<?

use yii\helpers\Url;

?>


<div class="container">
    <nav class="nav nav-menu">
        <a class="nav-link active" href="/">Всё меню</a>
        <? foreach ($data as $item) {?>
        <a class="nav-link" href="<?=Url::to(['category/view', 'id'=>$item['cat_name']])?>"><?=$item['browser_name']?></a>
        <? } ?>
    </nav>
</div>
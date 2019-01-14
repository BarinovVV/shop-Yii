<?
?>


<div class="container">
    <nav class="nav nav-menu">
        <a class="nav-link active" href="/">Всё меню</a>
        <? foreach ($data as $id) {?>
        <a class="nav-link" href="#"><?=$id['browser_name']?></a>
        <? } ?>
    </nav>
</div>
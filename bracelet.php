<?php
    $query="select*from filters where typeFilter='bracelet'";
    $result=$connect->query($query);
?>
<aside class="col-md-2">
    <?php foreach($result as $rs):?>
        <section class="type">
            <a href="?request=search&filterId=<?=$rs['id']?>"><?=$rs['typeName']?></a>
        </section>
    <?php endforeach;?>
</aside>
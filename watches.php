<section class="container-fluid">
    <?php if(mysqli_num_rows($result)==0):?>
        <section class="alert alert-info column-itemz">No Watches!</section>
    <?php else:?>
        <?php foreach($result as $rs):?>
        <a href="#">
            <section class="column-layout__containerz column-itemz">
                <section class="img">
                    <img src="img/<?=$rs['image']?>">
                </section>
                <section style="font-weight: bold;">
                    <?=$rs['watchName']?>
                </section>
                <section>
                    <?=$rs['type']?>
                </section>
                <section style="color:red;">
                    <?=$rs['version']?>
                </section><br />
                <section>
                    <a href="#" class="btn btn-outline-light btn-danger">Detail</a>
                </section>
            </section>
        </a>
    <?php endforeach;?>
    <?php endif;?>
</section>

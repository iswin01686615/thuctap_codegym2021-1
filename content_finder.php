    <?php if(isset($_GET['request'])==0):?>
    <?php include"home.php"?>
    <?php else:?>
    <?php
        if(isset($_GET['request'])){
            switch($_GET['request']){
                case'home':
                    include"home.php";
                    break;
                case'search':
                    include"search.php";
                    break;
            }
        }
    ?>
    <?php endif;?>

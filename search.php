<?php
    $query="select*from watches where status=1 ";
    if(isset($_GET['filterId'])){
        $query.="and filterId=".$_GET['filterId'];
    }
    $result=$connect->query($query);
?>
<?php include"watches.php";?>
<?php require_once('functions.php');?>
<?php
    $con=openConnection();
    $strSql="SELECT * FROM tbl_products";
    $products=getRecord($con,$strSql);
    
    closeConnection($con);
?>
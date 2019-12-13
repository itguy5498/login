<?php
declare(strict_types=1);
include 'includes/class-autoload.inc.php';

$em=$_POST['em'];
$ps=$_POST['ps'];
$btn=$_POST['btn'];
$checkform=new checkForm($btn,(string) $em,(string)$ps);
try{
    echo $checkform->check();
}catch (TypeError $e){
    echo "Error! :".$e->getMessage();
}
?>
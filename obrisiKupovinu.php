<?php
include("init.php");
$id= $_GET['kupovinaID'];
$db->rawQuery("delete from kupovina where kupovinaID=".$id);

?>

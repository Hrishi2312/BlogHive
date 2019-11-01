<?php
include('../../App/Database/db.php');
delete('post', ['id'=>$_GET['id']]);
header('Location: index.php');
?>

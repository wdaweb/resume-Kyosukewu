<?php
include_once "../base.php";
$row=$Pro->find(['id'=>$_POST['id']]);
$row['sk'] = serialize($_POST['sks']);
print_r($row);

$Pro->save($row);

to('../backend.php?do=pro');
?>

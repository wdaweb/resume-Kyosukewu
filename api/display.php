<?php
include_once "../base.php";

$db = new DB($_POST['table']);
$row = $db->find($_POST['id']);
$row['sh'] = ($row['sh'] + 1) % 2;
$db->save($row);

$others = $db->all();
foreach ($others as $key => $value) {
    if ($value['id'] != $_POST['id']) {
        $other = $db->find($value['id']);
        $other['sh'] = 0;
        $db->save($other);
    }
}

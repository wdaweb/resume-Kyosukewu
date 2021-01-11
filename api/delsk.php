<?php
include_once "../base.php";

$prosk = $Pro->find($_POST['id']);
$csk = $_POST['item'];

$prosk['sk']=unserialize($prosk['sk']);

$c = count($prosk['sk']);
for ($i = 0; $i < $c; $i++) {
    if ($csk==$prosk['sk'][$i]) {
        unset($prosk['sk'][$i]);
    }
}
$prosk['sk'] = serialize($prosk['sk']);

// echo $prosk['sk'];


$Pro->save($prosk);
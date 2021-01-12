<?php
include_once "../base.php";

$db = new DB($_POST['table']);
$row = $db->find($_POST['id']);
$table = $_POST['do'];

// print_r($_POST['sks']);


if ($table == 'pro') {
    if (!empty($_FILES['bimg']['tmp_name'])) {
        $_POST['bimg'] = $_FILES['bimg']['name'];
        move_uploaded_file($_FILES['bimg']['tmp_name'], '../bimg/' . $_FILES['bimg']['name']);
    }
    if (!empty($_FILES['img']['tmp_name'])) {
        $_POST['img'] = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], '../img/' . $_FILES['img']['name']);
    }
    $_POST['sk'] = serialize($_POST['sks']);
    unset($_POST['sks']);
} elseif (!empty($_FILES['img']['tmp_name'])) {
    $_POST['img'] = $_FILES['img']['name'];
    switch ($table) {
        case "main":
        case "ab":
            move_uploaded_file($_FILES['img']['tmp_name'], '../titimg/' . $_FILES['img']['name']);
            break;
        case "sk":
            move_uploaded_file($_FILES['img']['tmp_name'], '../icon/' . $_FILES['img']['name']);
            break;
    }
}
switch ($_POST['table']) {
    case 're_cont':
        $row['icon'] = $_POST['icon'];
        $row['method'] = $_POST['method'];
        $row['cont'] = $_POST['cont'];
        break;
    case 're_job':
        $row['text'] = $_POST['text'];
        $row['cont'] = $_POST['cont'];
        break;
    case "re_exp":
        $row['year'] = $_POST['year'];
        $row['jtitle'] = $_POST['jtitle'];
        $row['cont'] = $_POST['cont'];
        break;
    case "re_skills":
        $row['type'] = $_POST['type'];
        $row['cont'] = $_POST['cont'];
        if (!empty($_POST['img'])) {
            $row['img'] = $_POST['img'];
        }
        break;
    case "re_pro":
        $row['type'] = $_POST['type'];
        $row['name'] = $_POST['name'];
        $row['cont'] = $_POST['cont'];
        if (!empty($_POST['img'])) {
            $row['img'] = $_POST['img'];
        }
        if (!empty($_POST['bimg'])) {
            $row['bimg'] = $_POST['bimg'];
        }
        if (!empty($_POST['link'])) {
            $row['link'] = $_POST['link'];
        }
        $row['sk']=unserialize($row['sk']);
        $c=count($_POST['sk']);
        
        for($i=0;$i<$c;$i++){
            if($_POST['sk'][$i]!==""){
                $row['sk'][$i] = $_POST['sk'][$i];
            }
        }
        $row['sk']=serialize( $row['sk']);
        break;
    default:
        $row['text'] = $_POST['text'];
        break;
}
unset($_POST['do']);
unset($_POST['table']);
// print_r($row['sk']);
// print_r($row);
$db->save($row);
to('../backend.php?do=' . $table);
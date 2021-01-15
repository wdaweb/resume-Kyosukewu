<?php
include_once "../base.php";

$db = new DB($_POST['table']);
$table = $_POST['do'];
// print_r($_POST);


if ($table == 'pro') {
    if (!empty($_FILES['bimg']['tmp_name'])) {
        $_POST['bimg'] = $_FILES['bimg']['name'];
        move_uploaded_file($_FILES['bimg']['tmp_name'], '../bimg/' . $_FILES['bimg']['name']);
    }
    if (!empty($_FILES['img']['tmp_name'])) {
        $_POST['img'] = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], '../img/' . $_FILES['img']['name']);
    }
    // $c=count($_POST['sks']);

    // echo $c;
    $_POST['sk'] = serialize($_POST['sks']);
    // $_POST['skid'] = serialize($_POST['sksid']);
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
    case "re_exp":
        $_POST['rank'] = $Exp->q("select max(rank) from re_exp")[0][0] + 1;
        break;
    case "re_skills":
        $_POST['rank'] = $Sk->q("select max(rank) from re_skills")[0][0] + 1;
        break;
    case "re_pro":
        $_POST['rank'] = $Sk->q("select max(rank) from re_pro")[0][0] + 1;
        break;
}


// print_r($_POST['sk']);
// $c = count($_POST['sks']);

// for ($i = 0; $i <= $c-1; $i++) {
//     $_POST['sk' . ($i+1)] = $_POST['sks'][$i];
// }

unset($_POST['table']);
unset($_POST['do']);

$chk = $db->count();

if (empty($chk)) {
    $_POST['sh'] = 1;
} else {
    $_POST['sh'] = 0;
}


// print_r($_POST);

$db->save($_POST);

to('../backend.php?do=' . $table);

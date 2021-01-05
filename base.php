<?php

date_default_timezone_set("Asia/Taipei");

session_start();

$Log = new DB('re_login');
$Img = new DB('re_titimg');
$Timg = new DB('re_tittext');
$Ab = new DB('re_about');
$Abtext = new DB('re_abouttext');
$Edu = new DB('re_edu');
$Cont = new DB('re_cont');
$Job = new DB('re_job');
$Self = new DB('re_self');
$Exp = new DB('re_exp');

class DB
{
    private $table;
    private $pdo;
    private $dsn = "mysql:host=localhost;dbname=s1090421;charset=utf8";
    private $user="root";
    private $pw="";
    // private $user="s1090421";
    // private $pw="s1090421";


    function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,$this->user,$this->pw);
    }
    function all(...$arg)
    {
        $sql = "select * from $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = sprintf("`%s`='%s'", $key, $value);
                }
                $sql .= " where " . implode(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchAll();
    }
    function count(...$arg)
    {
        $sql = "select count(*) from $this->table ";
        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = sprintf("`%s`='%s'", $key, $value);
                }
                $sql .= " where " . implode(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    function find($arg)
    {
        $sql = "select * from $this->table ";
        if (is_array($arg)) {
            foreach ($arg as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql .= " where " . implode(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arg'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function del($arg)
    {
        $sql = "delete from $this->table ";
        if (is_array($arg)) {
            foreach ($arg as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql .= " where " . implode(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arg'";
        }
        return $this->pdo->exec($sql);
    }

    function save($arg)
    {
        if (!empty($arg['id'])) {
            foreach ($arg as $key => $value) {
                $tmp[] = sprintf("`%s`='%s'", $key, $value);
            }
            $sql = "update $this->table set " . implode(" , ", $tmp) . " where `id`='{$arg['id']}'";
        } else {
            $sql = "insert into $this->table (`" . implode("`,`", array_keys($arg)) . "`) values('" . implode("','", $arg) . "')";
        }
        // echo $sql;
        return $this->pdo->exec($sql);
    }

    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll();
    }
}

function to($url)
{
    header("location:" . $url);
}

$tstr=[
    'main'=>["編輯封面圖片","編輯動畫文字"],
    'ab'=>['編輯關於我區塊','編輯照片','編輯自我簡介','編輯學歷','編輯聯絡資訊','編輯求職條件','編輯自傳'],
    'exp'=>['編輯經歷'],
    'sk'=>['編輯網頁技能','編輯視覺技能','編輯3D技能'],
    'pro'=>['網頁設計類','視覺設計類','3D設計類'],
    'cont'=>['編輯聯絡資訊','編輯聯絡資訊文字']
];
<?php

date_default_timezone_set("Asia/Taipei");

session_start();

$Log = new DB('re_login');

class DB
{
    private $table;
    private $dsn = "mysql:host=localhost;dbname=s1090421;charset=utf8";
    private $user="s1090421";
    private $pw="s1090421";


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
            $sql = "insert into $this->table (`" . implode("`,`", array_keys($arg)) . "`) values('" . implode(" , ", $arg) . "')";
        }
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

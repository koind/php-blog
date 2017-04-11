<?php

class Database
{
    private $sql;

    public function __construct()
    {
        require_once __DIR__ . "/../functions/config.php";
        mysql_connect($localhost, $username, $password);
        mysql_select_db($selectDb);
    }

    public function sql_QueryArticl($sql)
    {
        $this->sql = $sql;

        $rel = mysql_query($this->sql);

        $arr = [];
        while (!false == ($row = mysql_fetch_assoc($rel))) {
            $arr[] = $row;
        }

        return $arr;
    }

    public function sql_Inquiries($sql)
    {
        $this->sql = $sql;

        mysql_query($this->sql);
    }

}





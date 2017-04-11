<?php

function sql_Connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('blog');
}

function sql_QueryArticl($sql)
{
    sql_Connect();
    $rel = mysql_query($sql);

    $arr = [];
    while (!false == ($row = mysql_fetch_assoc($rel))) {
        $arr[] = $row;
    }

    return $arr;
}

function sql_Inquiries($sql)
{
    sql_Connect();
    $rel = mysql_query($sql);
}
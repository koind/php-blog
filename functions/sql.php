<?php

function sql_Connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('blog');
}

function sql_Query($sql)
{
    sql_Connect();
    $rel = mysql_query($sql);
    $row = mysql_fetch_assoc($rel);

    if (false !== $row) {
        return $row;
    } else {
        return false;
    }
}

function sql_Insert($sql)
{
    sql_Connect();
    $rel = mysql_query($sql);
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

function sql_Delete($sql)
{
    sql_Connect();
    mysql_query($sql);
}
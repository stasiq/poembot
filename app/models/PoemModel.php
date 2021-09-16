<?php

namespace App\models;

use App\classes\Db as Db;
use PDO;

class PoemModel
{

    public static function getItem($theme)
    {
     $db = Db::getConnect();
     $query = $db->query("SELECT * FROM poems WHERE theme_id = $theme");
     $row = $query->fetch(PDO::FETCH_OBJ);
     return $row;
    }
    public static function getList()
    {
        $db = Db::getConnect();
        $query = $db->query("SELECT * FROM poems");
        $rows = [];
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $rows[] = $row;
        }
        return $rows;
    }

}
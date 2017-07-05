<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article
    extends Model
{
    protected static $table = 'news';

    public $title;
    public $lead;
    public $desc;

    public static function findLatest($number)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $number;
        $db = new Db();
        return $db->query($sql, static::class);
    }

}
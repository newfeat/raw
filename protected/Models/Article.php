<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article
    extends Model
{
    protected static $table = 'news';

    public static function findLatest($number)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $number;
        $db = new Db();
        return $db->query($sql, static::class);
    }

    public function __get($key)
    {
        if ($key === 'author') {
            return Author::findById($this->author_id);
        }

        return $this->data[$key];
    }


    public function __isset($key)
    {
        if ($key === 'author') {
            return isset($this->author_id);
        }

        return isset($this->data[$key]);
    }

}
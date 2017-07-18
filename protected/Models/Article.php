<?php

namespace App\Models;

use App\Db;
use App\Model;
use App\MultiException;

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

    protected function validate_title($val)
    {
        $err = new MultiException();
        if(strlen($val)<5){
            $err->add(new \Exception('Слишком коротокое наименование статьи'));
        }
        if(false !== strpos($val, '!')){
            $err->add(new \Exception('Недопустимый символ в наименовании статьи'));
        }
        if(!$err->empty()){
            throw $err;
        }
    }

}
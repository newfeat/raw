<?php

namespace App;

abstract class Model
{
    protected static $table = null;

    public $id;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $db = Db::instance();
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::$table. ' WHERE id=:id';
        $db = Db::instance();
        $data = $db->query($sql, static::class, [':id' => $id]);
        if (empty($data)){
            return false;
        }
        return array_shift($data);
    }

    public function insert()
    {
        $data = get_object_vars($this);
        $cols = [];
        $binds = [];
        $params = [];
        foreach ($data as $key => $val){
            if ('id' == $key) {
                continue;
            }
            $cols[] = $key;
            $binds[] = ':' . $key;
            $params[':' . $key] = $val;
        }
        $sql = 'INSERT INTO ' . static::$table. ' (' . implode(', ', $cols) . ') VALUES (' . implode(', ', $binds) . ')';

        $db = Db::instance();

        $db->execute($sql, $params);

        $this->id = $db->lastInsertId();


    }

    public function update()
    {
        $cols = [];
        $params = [];
        foreach ($this as $key => $val) {
            if ('id' !== $key) {
                $cols[] = $key . '=:' . $key;
            }
            $params[':' . $key] = $val;
        }
        $db = Db::instance();
        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $cols) . ' WHERE id=:id';
        return $db->execute($sql, $params);
    }


    public function isNew()
    {
        return empty($this->id);
    }


    public function save()
    {
        if ($this->isNew()) {
            return $this->insert();
        } else {
            return $this->update();
        }
    }
    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = Db::instance();
        $arg = [':id' => $this->id];
        return $db->execute($sql, $arg);
    }

}
<?php

namespace App;


trait MagicTrait

{
    protected $data = [];

    public function __set($key, $val)
    {
        $method = 'validate_' . $key;
        if (method_exists($this, $method)) {
            $this->$method($val);
        }
        $this->data[$key] = $val;
    }

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

}
<?php

namespace App;

class View
    implements \Countable, \ArrayAccess, \Iterator

{
    use MagicTrait;

    public function render($template)
    {
        ob_start();
        echo 'Новости';
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }



    public function display($template)
    {
        echo $this->render($template);
    }



    public function count()
    {
        return count($this->data);
    }



    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset];

    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }



    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        return next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return !empty(key($this->data));
    }

    public function rewind()
    {
        reset($this->data);
    }

}
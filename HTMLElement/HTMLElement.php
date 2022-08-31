<?php

namespace App;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key];
    }

    // BEGIN (write your solution here)
    public function addClass($className)
    {
        $arr = $this->converter($this->attributes['class']);
        if (!in_array($className, $arr)) {
            $arr[] = $className;
        }
        $this->attributes['class'] = $this->converter($arr);
    }
    public function removeClass($className)
    {
        $arr = $this->converter($this->attributes['class']);
        $index = array_search($className, $arr);
        unset($arr[$index]);
        $this->attributes['class'] = $this->converter($arr);
    }
    public function toggleClass($className)
    {
        $arr = $this->converter($this->attributes['class']);
        if (in_array($className, $arr)) {
            $this->removeClass($className);
        } else {
            $this->addClass($className);
        }
    }
    protected function converter($attr)
    {
        if (is_array($attr)) {
            return implode(' ', $attr);
        }
        return explode(' ', $attr);
    }
    // END
}
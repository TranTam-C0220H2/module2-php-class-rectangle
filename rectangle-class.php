<?php

class Rectangle
{
    public $width;
    public $height;
    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function set_width($new_width)
    {
        $this->width = $new_width;
    }

    function set_height($new_height)
    {
        $this->height = $new_height;
    }

    function get_width()
    {
        return $this->width;
    }

    function get_height()
    {
        return $this->height;
    }
    function getPerimeter() {
        return ($this->get_width()+$this->get_height())*2;
    }
    function getArea() {
        return $this->get_width()*$this->get_height();
    }
    function render() {
        for ($i = 0;$i<$this->get_height();$i++) {
            for ($j = 0;$j<$this->get_width();$j++) {
                echo '* ';
            }
            echo '<br>';
        }
    }
}
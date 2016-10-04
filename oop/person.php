<?php
/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/2/5
 * Time: 11:47
 */
//namespace person;


class person
{
    public $name;
    private $age;
    private $sex;

    function say()
    {
        echo '<br/>我叫：' . $this->name . ',性别：' . $this->sex . ',年龄：' . $this->age;
    }

    function __construct($name = '', $sex = '男', $age = 0)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<br/>再见，" . $this->name . "";
    }

    function __get($property_name)
    {
        // TODO: Implement __get() method.
        if (isset($this->$property_name)) {
            return $this->$property_name;
        }
        return null;
    }

    function __set($property_name, $value)
    {
        // TODO: Implement __set() method.
        $this->$property_name = $value;
    }
}
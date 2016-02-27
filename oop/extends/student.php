<?php

/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/2/5
 * Time: 14:22
 */
class student extends person
{
    public $school;
    function  say(){
        parent::say();
        echo '<br/>我是一名学生，我在'.$this->school.'上学，我叫：'.$this->name.'，性别：'.$this->sex.',年龄：'.$this->age;
    }
}
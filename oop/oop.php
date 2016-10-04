<?php
/**
 * Created by PhpStorm.
 * User: YGJ
 * Date: 2016/2/5
 * Time: 14:15
 */

include 'person.php';
include 'extends/student.php';

$preson = new \person('张三');
$preson->__set('age', 20);
$preson->__set('sex', '男');
$preson->say();

$student = new student('李四');
$student->__set('age', 10);
$student->__set('sex', '男');
$student->school = '濮阳小学';
$student->say();
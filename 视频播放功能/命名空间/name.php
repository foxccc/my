<?php
//name.php
namespace test;
require '1.php';

class Person{
    function __construct(){
            echo 'I am test!';
        }
}

new \one\Person(); //输出 I am one!;
new Person();
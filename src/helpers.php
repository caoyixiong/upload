<?php

if (!function_exists('hello')) {
    /**
     * 测试公共方法
     * @param string $name
     * @return string
     */
    function hello($name = 'World')
    {
        return 'Hello ' . $name;
    }
}
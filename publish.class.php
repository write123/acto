<?php

/**
 * Created by PhpStorm.
 * User: gw
 * Date: 2016/7/8
 * Time: 15:39
 */
class publish
{
    static $inst;

    private function __construct(){}

    /**
     * get instance of publish
     *
     * @return publish
     */
    public static function get()
    {
        !self::$inst && self::$inst = new publish();

        return self::$inst;
    }


}
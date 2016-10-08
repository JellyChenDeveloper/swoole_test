<?php

/**
 * FileName:sw_timer.php
 * Created by JellyChen
 * Date: 2016/10/8
 * Time: 11:23
 *
 *
 *
 * @author         JellyChen
 * @copyright      All Rights Reserved.
 * @version        1.0
 */
class Test
{
    private $str = 'Say Hello';

    public function onAfter()
    {
        echo $this->str;
    }
}

$test = new Test();
swoole_timer_after(1000, array($test, 'onAfter'));

swoole_timer_after(2000, function () use ($test) {
    $test->onAfter();
});
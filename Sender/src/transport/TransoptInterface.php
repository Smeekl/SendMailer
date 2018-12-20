<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 17.12.18
 * Time: 16:36
 */

namespace transport;


interface TransoptInterface
{
    public function __construct($settings, $messageSettings);
    public function  sendData();
}
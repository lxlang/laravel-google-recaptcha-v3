<?php
/**
 * Created by PhpStorm.
 * User: rayndeng
 * Date: 6/8/18
 * Time: 5:29 PM
 */

namespace RyanDeng\GoogleReCaptcha\Interfaces;


interface RequestClientInterface
{


    public function post($url, $body, $options = []);

}
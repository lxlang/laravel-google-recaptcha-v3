<?php
/**
 * Created by PhpStorm.
 * User: rayndeng
 * Date: 6/8/18
 * Time: 5:29 PM
 */

namespace RyanDeng\GoogleReCaptcha\Interfaces;


interface ReCaptchaConfigInterface
{

    public function isServiceEnabled();
    /**
     * @return bool
     */
    public function isScoreEnabled();

    /**
     * @return string
     */
    public function getSecretKey();

    /**
     * @return int
     */
    public function getCurlTimeout();

    /**
     * @return bool
     */
    public function getCurlVerify();

    /**
     * @return string
     */
    public function getTemplate();

    /**
     * @return string
     */
    public function getSiteKey();


    /**
     * @return array
     */
    public function getOptions();

    /**
     * @return array
     */
    public function getScoreSetting();

    /**
     * @return string
     */
    public function getSiteVerifyUrl();

    /**
     * @return string
     */
    public function getHostName();
}
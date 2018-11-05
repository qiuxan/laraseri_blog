<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 5/11/18
 * Time: 1:38 PM
 */

namespace App\Billing;

class Stripe{

    protected $key;

    public function __construct($key)
    {
        $this->key=$key;
    }
}
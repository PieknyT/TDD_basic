<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-08-01
 * Time: 21:59
 */
class Validator
{
    private $store;
    public function  __construct(UserStore $store)
    {
        $this->store = $store;
    }

    public function validateUser($mail, $pass)
    {
        if(!is_array($user = $this->store->getUser($mail)))
        {
            return false;
        }

        if($user['pass'] == $pass)
        {
            return true;
        }

        $this->store->notifyPasswordFailure($mail);
        return false;
    }

}


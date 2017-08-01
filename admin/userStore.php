<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-08-01
 * Time: 21:34
 */
class UserStore
{
  private $users = [];

  function addUser($name, $mail, $pass)
  {
      if( isset($this->users[$mail]))
      {
          throw new Exception("Account {$mail} already exist on the system");
      }

      if( strlen($pass) < 5)
      {
          throw new Exception("The password must contain at least 5 characters");
      }

      $this->users[$mail] = [ 'pass' => $pass, 'mail' => $mail, 'name' => $name];
      return true;
  }

  function notifyPasswordFailure($mail)
  {
      if (isset($this->users[$mail]))
      {
        $this->users[$mail]['failed'] = time();
      }
  }

  function getUser($mail)
  {
      return ($this->users[$mail]);
  }



}




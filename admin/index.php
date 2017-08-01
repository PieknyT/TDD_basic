<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 2017-08-01
 * Time: 22:18
 */


require_once('userStore.php');
require_once('validator.php');

//$store = new UserStore();
//$store->addUser("Steven Seagal", "killer@gmail.com", "killyou");
//$user = $store->getUser("killer@gmail.com");
//print_r($user);





$store = new UserStore();
$store->addUser("Steven Seagal", "killer@gmail.com", "killyou");
$validator = new Validator($store);

if($validator->validateUser("killer@gmail.com", "kilyou"))
{
    print "pass!\n";
}
else
{
    print "Not passed!\n";
}
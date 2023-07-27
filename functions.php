<?php 

use \App\Model\User;

function formatPrice($vlprice)
{
    if (!$vlprice > 0) $vlprice = 0;

	return number_format($vlprice, 2, ",", ".");
    
}

function data(int $year)
{

    return date('Y');

}

function checkLogin($inadmin = true)
{

    return User::checkLogin($inadmin);

}

function getUserName()
{

    $user = User::getFromSession();

    return $user->getdesperson();
}


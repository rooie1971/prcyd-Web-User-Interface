<?php

/**
 * @author Chris S - AKA Someguy123
 * @version 0.01 (ALPHA!)
 * @license PUBLIC DOMAIN http://unlicense.org
 * @package +Coin - Bitcoin & forks Web Interface
 * This is the config file for +Coin
 * You MUST add your daemon host information to this
 * file, or it won't work.
 * 
 */

session_start();
$wallets = array();

$wallets['wallet 1'] = array("user" => "user",  
            "pass" =>   "password",      
            "host" =>   "localhost",     
            "port" =>   59682,
	    "protocol" => "http");            

if (isset($_POST['currentWallet']))
	$_SESSION['currentWallet'] = $_POST['currentWallet'];

if (isset($_SESSION['currentWallet']))
	$currentWallet = $_SESSION['currentWallet'];
else
{
	$keys = array_keys($wallets);
	$currentWallet = $keys[0];
	$_SESSION['currentWallet'] = $currentWallet;
}

$nmcu = $wallets[$currentWallet];

?>

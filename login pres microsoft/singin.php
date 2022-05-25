<?php

session_start();

require "vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "unob.onmicrosoft.com";
$client_id = "473be1e5-0615-4fc3-a952-0e3fe7991fc7";
$client_secret = "vrq7Q~oyG8M2WQV46xPJjKP~7G~oi7Jt3HmiZ";
$callback = "https://localhost/calback.php";
$scopes = ["User.Read"];

$microsoft = new Auth($tenant, $client_id, $client_secret, $callback, $scopes);

header("location: " . $microsoft->getAuthUrl());
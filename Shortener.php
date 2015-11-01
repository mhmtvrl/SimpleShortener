<?php

require 'Configuration.php';

function getRandomString($length)
{
    $validChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = "";
    $numberOfValidChars = strlen($validChars);
    for ($i = 0; $i < $length; $i++) {
        $randomPick = mt_rand(1, $numberOfValidChars);
        $randomChar = $validChars[$randomPick - 1];
        $randomString .= $randomChar;
    }
    return $randomString;
}

function connectToDatabase()
{
    global $configuration;

    $serverName = $configuration['serverName'];
    $userName = $configuration['userName'];
    $password = $configuration['password'];
    $databaseName = $configuration['databaseName'];

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch (PDPException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

//echo $_POST['url'];
echo '<br>';
echo getRandomString(5);
echo '<br>';
echo 'userName ' . $configuration['userName'];
echo '<br>';
connectToDatabase();

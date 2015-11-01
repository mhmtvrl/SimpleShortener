<?php

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

echo $_POST['url'];
echo '<br>';
echo getRandomString(5);

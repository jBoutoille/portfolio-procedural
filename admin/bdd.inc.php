<?php

require 'code.php';


try
{
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database . ';charset=utf8', $user, $password);
}
catch(Exception $e)
{
    die('Erreur: ' . $e->getMessage());
}

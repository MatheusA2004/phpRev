<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'bdsistema';

$con = mysqli_connect("$server","$user","$pass","$db");

if(!$con){
    echo "conexão falhou";
}
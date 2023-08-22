<?php
$logincad = 'Matheus';
$senhacad = '202cb962ac59075b964b07152d234b70';

$nivelacesso = 8;


$login =  $_POST['login'];
$senha = $_POST['senha'];
$senha = md5($senha);

if($senha == $senhacad && $login == 'Matheus'){
    if($nivelacesso == 1){
        header('location: administrador.php');
    } else if($nivelacesso == 2){
        header('location: colaborador.php');
    } else if($nivelacesso == 3){
        header('location: cliente.php');
    } else{
        echo "seu nivel de acesso não existe";
    }

}  else{
    echo "login ou senha invalidos";
}
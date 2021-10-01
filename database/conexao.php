<?php
/* PARAMETROS DE CONEXÃO MYSQLI
 1 - HOST- ONDE O BANCO DE DADOS ESTÁ RODANDO
 2 - USER - USUÁRIO DO BANCO DE DADOS
 3 - PASSWORD - SENHA DO USUÁRIO DO BANCO DE DADOS
 4 - DATABASE - NOME DO BANCO DE DADOS
 */

 const HOST = 'localhost';
 const USER = 'root';
 const PASSWORD = 'bcd127';
 const DATABASE = 'icatalogo';

 $conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);//*VAI CONECTAR AO MYSQLI

 if ($conexao === false) {
     
    die(mysqli_connect_error());

 }
 /*echo '<pre>';
 var_dump($conexao);
 echo '<pre>';
*/

 ?>
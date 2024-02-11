<?php 


use Doctrine\DBAL\DriverManager;

 //..
 $connectionParams = [
     'dbname' => 'scrap',
     'user' => 'root',
     'password' => '',
     'host' => 'localhost',
     'driver' => 'pdo_mysql',
 ];

 $conn = DriverManager::getConnection($connectionParams);
 

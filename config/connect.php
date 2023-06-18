<?php
$connect = mysqli_connect('localhost', 'root', '', 'Metanit-2023');

if(!$connect){
    die ('ошибка подключения БД');
}
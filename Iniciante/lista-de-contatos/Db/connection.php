<?php
include("config.php");

$connection = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die("Connection error!" . mysqli_connect_error());
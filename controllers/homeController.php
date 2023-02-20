<?php
use COMPANY\Database;
use COMPANY\Company;
$connect = Database::connect();
$company = new Company($connect);


require "views/pages/home.view.php";
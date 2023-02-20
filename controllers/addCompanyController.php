<?php
use COMPANY\Database;
use COMPANY\Company;

if(isset($_POST['save'])){
    $connection = Database::connect();
    $company = new Company($connection);
    var_dump($_POST);
    $company->createCompany($_POST);
}
require('views/pages/add-company.view.php');
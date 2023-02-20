<?php
use COMPANY\Request;
use COMPANY\Database;
use COMPANY\Company;

$id = intval(basename(Request::uri()));
$company = new Company(Database::connect());
$data = $company->update($id);

if(isset($_POST['update'])){
    $company->storeUpdate($_POST,$id);
}

require "views/pages/update-company.view.php";



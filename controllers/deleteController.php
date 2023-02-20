<?php
use COMPANY\Request;
use COMPANY\Database;
use COMPANY\Company;



$id = intval(basename(Request::uri()));
$connection = Database::connect();
$company = new Company($connection);
$company->deleteCompany($id);
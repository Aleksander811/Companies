<?php
$router->define([
    '/'=>'controllers/homeController.php',
    '/add-company'=>'controllers/addCompanyController.php',
    '/update-company'=>'controllers/updateController.php',
    '/delete-company'=>'controllers/deleteController.php',
    '404'=>'controllers/404Controller.php'
]);
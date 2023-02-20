<?php require "vendor/autoload.php";
use COMPANY\Request;
use COMPANY\Router;

require Router::load('routes.php')->direct(Request::uri());
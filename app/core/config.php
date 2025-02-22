<?php


if($_SERVER['SERVER_NAME'] == 'localhost'){
    
    define("ROOT","http://localhost/softrestaurant/public");
} else {
    define("ROOT","https://website.xyz/public");
}
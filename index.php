<?php

$cookieName = "VDP";
$cookieValue = "Muoi9tuoi";

setcookie($cookieName, $cookieValue, time() + (864000), "/");

if (isset($_COOKIE[$cookieName])) {
    echo "dang ton tai";
} else {
    echo "ko ton tai";
}



<?php

session_destroy();
unset($_COOKIE['PHPSESSID']);
header('location: /');

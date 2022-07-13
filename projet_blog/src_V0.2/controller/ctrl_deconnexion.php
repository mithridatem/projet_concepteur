<?php

session_destroy();
unset($_COOKIE['PHPSESSID']);
header('location: /Blog/src_V0.2');
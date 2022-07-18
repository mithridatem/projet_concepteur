<?php

session_destroy();
unset($_COOKIE['PHPSESSID']);
header('location: /blog_folio/src_V0.2');
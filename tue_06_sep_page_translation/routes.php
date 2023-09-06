<?php

require_once __DIR__.'/router.php';

// ##################################################
// ##################################################
// ##################################################

// Static GET
get('/', 'views/index.php');
get('/$lg', 'views/index.php');

// Page not found
any('/404','views/404.php');
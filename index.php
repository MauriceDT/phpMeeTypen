<?php

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

use App\Core\{Router, Request};


//Router below

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());

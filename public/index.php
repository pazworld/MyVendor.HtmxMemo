<?php

declare(strict_types=1);

use MyVendor\HtmxMemo\Bootstrap;

require dirname(__DIR__) . '/autoload.php';
exit((new Bootstrap())(PHP_SAPI === 'cli-server' ? 'html-app' : 'prod-html-app', $GLOBALS, $_SERVER));

<?php

/**
 * Lenevor Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file license.md.
 * It is also available through the world-wide-web at this URL:
 * https://lenevor.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Lenevor.com so we can send you a copy immediately.
 *
 * @package     Lenevor
 * @link        https://lenevor.com
 * @copyright   Copyright (c) 2019 - 2025 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

use Syscodes\Components\Http\Request;

define('LENEVOR_START', microtime(true));

// Calls all the pathname of settings for manages an application web...
$paths = require __DIR__.'/../config/paths.php';

//Register bootstrap from web resource bundle...
if (file_exists($paths['path.sys'].'/src/bundles/WebResourceBundle/Bootstrap/bootstrap.php'))
    require $paths['path.sys'].'/src/bundles/WebResourceBundle/Bootstrap/bootstrap.php';

// Bootstrap the application Lenevor and handle the request...  
(require_once $paths['path.bootstrap'].'/app.php')
    ->handleRequest(Request::capture());
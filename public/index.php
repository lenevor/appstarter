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
 * @copyright   Copyright (c) 2019 - 2021 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

use Syscodes\Http\Request;
use Syscodes\Contracts\Http\Lenevor;

define('LENEVOR_START', microtime(true));

/*
|------------------------------------------------------------------------
| Register The Composer auto loader
|------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader 
| for our application. We will need it so that we do not have to worry 
| about loading any class of third party "manually".
|
*/

if (file_exists(__DIR__.'/../vendor/autoload.php'))
{
    require __DIR__.'/../vendor/autoload.php';
}

/*
|------------------------------------------------------------------------
| Call Configured Paths
|------------------------------------------------------------------------
|
| Calls all the pathname of settings for manages an application web.
|
*/

$paths = require __DIR__.'/../config/paths.php';

/*
|------------------------------------------------------------------------
| Register Bootstrap Core
|------------------------------------------------------------------------
|
| Load bootstrap from the core of system. 
|
*/

require $paths['path.sys'].'/src/bootstrap.php';

/*
|------------------------------------------------------------------------
| LOAD UP APPLICATION
|------------------------------------------------------------------------
|
| This bootstraps the framework and gets it ready for use, then it will 
| load up this application so that we can run. the responses back to the 
| browser and viewed for ours users.
|
*/

$app = require_once $paths['path.bootstrap'].'/app.php';

/*
|------------------------------------------------------------------------
| Run The Application                                               
|------------------------------------------------------------------------
|
| Now that everything is setup, it's time to actually fire up the engines 
| and make this app do its thing. It is activated from the core.
|
*/

$lenevor = $app->make(Lenevor::class);

// Initialize services
$response = take($lenevor->handle(
    $request = Request::capture()
))->send(true); // Sends HTTP headers and contents

$lenevor->shutdown($request, $response);
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

namespace App\Http;

use Syscodes\Core\Http\Lenevor as HttpLenevor;

/**
 * Core Framework.
 * 
 * @author Alexander Campo <jalexcam@gmail.com>
 */
class Lenevor extends HttpLenevor
{
    /**
     * Get the application's global HTTP middleware.
     * 
     * @var array $middleware
     */
    protected $middleware = [
        //
    ];

    /**
     * Get the application's middleware groups.
     * 
     * @var array $middlewareGroups
     */
    protected $middlewareGroups = [
        'web' => [
            //
        ],

        'api' => [
            //
        ]
    ];

    /**
     * Get the application's route middleware.
     * 
     * @var array $routeMiddleware
     */
    protected $routeMiddleware = [
        //
    ];
}
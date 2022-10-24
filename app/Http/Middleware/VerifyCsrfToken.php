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
 * @copyright   Copyright (c) 2019 - 2022 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

namespace App\Http\Middleware;

use Syscodes\Components\Core\Http\Middleware\VerifyCsrfToken as Middleware;

/**
 * Checks if exists a the CSRF token in the cookie.
 * 
 * @author Alexander Campo <jalexcam@gmail.com>
 */
class VerifyCsrfToken extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     * 
     * @var array $except
     */
    protected $except = [
        //
    ];
}
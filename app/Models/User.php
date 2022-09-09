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

namespace App\Models;

use Syscodes\Components\Database\Erostrine\Model;

/**
 * Called the User model when connection to database.
 * 
 * @author Alexander Campo <jalexcam@gmail.com>
 */
class User extends Model
{
    /**
     * The attributes that are mass assignable.
     * 
     * @var string[] $fillable
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 
     * @var array $hidden
     */
    protected $hidden = [
        'password',
    ];
}
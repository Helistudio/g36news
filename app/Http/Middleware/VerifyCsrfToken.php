<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/login.html',
        '/auth.html',
        '/logout.html',
        '/battle-update.html',
        '/battle_update.html',
        '/game-update.html',
        '/game_update.html',
        '/item-update.html',
        '/item_update.html',
        '/update_level.html',
        '/update_potential_point.html',
        '/get_battle_key.html',
        '/upgrade.html',

        '/authv2.html',
        '/auth_logout.html',
        '/update_userinfo_v2.html',
        '/update_item_v2.html',
        '/api/auth/callback',
        '/nft/callback'
    ];
}

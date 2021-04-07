<?php

namespace App\GraphQL\Queries;

use App\Models\User;

class FindUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return User::where('email', 'like', '%'.$args['email'].'%')->get();
    }
}

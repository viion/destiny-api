<?php

namespace App\Service\Destiny;

use App\Service\Destiny\API\Auth;
use App\Service\Destiny\API\User;

class DestinyApiProvider
{
    /**
     * @var Auth
     */
    private $auth;
    /**
     * @var User
     */
    private $user;
    
    public function __construct(
        Auth $auth,
        User $user
    ) {
        $this->auth = $auth;
        $this->user = $user;
    }
    
    /**
     * Provide the D2 Auth class
     */
    public function auth(): Auth
    {
        return $this->auth;
    }
    
    /**
     * Provide the D2 User class
     */
    public function user(): User
    {
        return $this->user;
    }
}

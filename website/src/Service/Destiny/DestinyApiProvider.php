<?php

namespace App\Service\Destiny;

use App\Service\Destiny\API\Auth;
use App\Service\Destiny\API\Destiny2;
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
    /**
     * @var Destiny2
     */
    private $destiny;
    
    public function __construct(
        Auth $auth,
        User $user,
        Destiny2 $destiny
    ) {
        $this->auth = $auth;
        $this->user = $user;
        $this->destiny = $destiny;
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

    /**
     * Provide the D2 Destiny class
     */
    public function destiny2(): Destiny2
    {
        return $this->destiny;
    }
}

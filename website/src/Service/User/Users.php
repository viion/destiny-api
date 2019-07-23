<?php

namespace App\Service\User;

use App\Service\Destiny\DestinyApiProvider;
use App\Service\Destiny\DestinyToken;
use App\Service\Destiny\Enums\BungieMembershipType;

class Users
{
    /**
     * @var DestinyApiProvider
     */
    private $api;
    
    public function __construct(DestinyApiProvider $api)
    {
        $this->api = $api;
    }

    /**
     * Get the users auth token saved to cookies
     */
    public function token()
    {
        return DestinyToken::getToken();
    }
    
    /**
     * Get the users destiny 2 user
     */
    public function user()
    {
        // get user response via token membership_id
        $response = $this->api->user()->getBungieNetUserById(
            DestinyToken::getToken('membership_id')
        );
        
        // if user exists
        if ($user = $response['Response']) {
            return $user;
        }
        
        return null;
    }
    
    public function memberships(): array
    {
        // get the memberships for the current user
        $response = $this->api->user()->getMembershipsForCurrentUser();

        return $response['Response']['destinyMemberships'] ?? [];
    }
    
    public function profile()
    {
        $bungieUser = $this->memberships();
    
        // todo - this is hard coded atm
        $bungieUser = $bungieUser[1];
        
        // Get users linked profiles
        $response = $this->api->destiny2()->getProfile(
            $bungieUser['membershipType'],
            $bungieUser['membershipId']
        );
        
        $profile = $response['Response']['profile'] ?? null;
        $characters = $response['Response']['characters'] ?? null;
        
        print_r($response);
        die;
    }
}

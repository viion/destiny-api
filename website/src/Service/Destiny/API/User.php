<?php

namespace App\Service\Destiny\API;

use App\Service\Destiny\DestinyApi;
use App\Service\Destiny\DestinyApiEndpoints;

class User extends DestinyApi
{
    public function getBungieNetUserById($id)
    {
        return $this->request(
            DestinyApiEndpoints::build(
                'User.GetBungieNetUserById',
                [
                    'id' => $id
                ]
            )
        );
    }

    public function getMembershipDataById($membershipId, $membershipType)
    {
        return $this->request(
            DestinyApiEndpoints::build(
                'User.GetBungieNetUserById',
                [
                    'membershipId' => $membershipId,
                    'membershipType' => $membershipType
                ]
            )
        );
    }
    
    public function getMembershipsForCurrentUser()
    {
        return $this->setAccessToken()->request(
            DestinyApiEndpoints::build(
                'User.GetMembershipDataForCurrentUser'
            )
        );
    }
}

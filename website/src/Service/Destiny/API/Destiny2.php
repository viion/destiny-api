<?php

namespace App\Service\Destiny\API;

use App\Service\Destiny\DestinyApi;
use App\Service\Destiny\DestinyApiEndpoints;
use App\Service\Destiny\Enums\DestinyComponentType;

class Destiny2 extends DestinyApi
{
    public function getProfile($accessToken, $membershipType, $destiny2MembershipId)
    {
        return $this->setAccessToken($accessToken)->request(
            DestinyApiEndpoints::build(
                'User.GetMembershipDataForCurrentUser',
                [
                    'membershipType' => $membershipType,
                    'destiny2MembershipId' => $destiny2MembershipId,
                ],
                [
                    'query' => [
                        'components' => implode(',', [
                            DestinyComponentType::PROFILES,
                            DestinyComponentType::CHARACTERS
                        ])
                    ]
                ]
            )
        );
    }

    public function getCharacter($accessToken, $membershipType, $destiny2MembershipId, $characterId)
    {
        return $this->setAccessToken($accessToken)->request(
            DestinyApiEndpoints::build(
                'User.GetMembershipDataForCurrentUser',
                [
                    'membershipType' => $membershipType,
                    'destiny2MembershipId' => $destiny2MembershipId,
                    'characterId' => $characterId
                ]
            )
        );
    }
}

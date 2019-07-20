<?php

namespace App\Service\Destiny\API;

use App\Service\Destiny\DestinyApi;
use App\Service\Destiny\Enums\BungieMembershipType;
use App\Service\Destiny\Enums\DestinyComponentType;

class User extends DestinyApi
{
    /**
     * https://bungie-net.github.io/multi/operation_get_User-GetBungieNetUserById.html#operation_get_User-GetBungieNetUserById
     */
    public function getBungieNetUserById($membershipId)
    {
        return $this->request(
            DestinyApi::METHOD_GET,
            sprintf(
                DestinyApi::ENDPOINT_USER_GET_BUNGLE_NET_USER_BY_ID,
                $membershipId
            )
        )->toArray();
    }
    
    
    
    /**
     * https://bungie-net.github.io/multi/operation_get_User-GetMembershipDataById.html#operation_get_User-GetMembershipDataById
     */
    public function getMembershipDataById($membershipId, $membershipType)
    {
        return $this->request(
            DestinyApi::METHOD_GET,
            sprintf(
                DestinyApi::ENDPOINT_USER_GET_MEMBERSHIP_DATA_BY_ID,
                $membershipId,
                $membershipType
            )
        )->toArray();
    }
    
    /**
     * https://bungie-net.github.io/multi/operation_get_User-GetMembershipDataForCurrentUser.html#operation_get_User-GetMembershipDataForCurrentUser
     */
    public function getMembershipsForCurrentUser($accessToken)
    {
        return $this->setAccessToken($accessToken)->request(
            DestinyApi::METHOD_GET,
            DestinyApi::ENDPOINT_USER_GET_MEMBERSHIP_CURRENT
        )->toArray();
    }
    
    /*
    public function getLinkedProfiles($membershipType, $membershipId)
    {
        return $this->request(
            DestinyApi::METHOD_GET,
            sprintf(
                DestinyApi::ENDPOINT_DESTINY2_GET_LINKED_PROFILES,
                $membershipType,
                $membershipId
            )
        )->toArray();
    }
    */
    
    /**
     * https://bungie-net.github.io/multi/operation_get_Destiny2-GetProfile.html#operation_get_Destiny2-GetProfile
     */
    public function getProfile($accessToken, $membershipType, $destiny2MembershipId)
    {
        return $this->setAccessToken($accessToken)->request(
            DestinyApi::METHOD_GET,
            sprintf(
                DestinyApi::ENDPOINT_DESTINY2_GET_PROFILE,
                $membershipType,
                $destiny2MembershipId
            ),
            [
                'query' => [
                    'components' => implode(',', [
                        DestinyComponentType::PROFILES,
                        DestinyComponentType::CHARACTERS
                    ])
                ]
            ]
        )->toArray();
    }
    
    /**
     * https://bungie-net.github.io/multi/operation_get_Destiny2-GetCharacter.html#operation_get_Destiny2-GetCharacter
     */
    public function getCharacter($accessToken, $membershipType, $destiny2MembershipId, $characterId)
    {
        return $this->setAccessToken($accessToken)->request(
            DestinyApi::METHOD_GET,
            sprintf(
                DestinyApi::ENDPOINT_DESTINY2_GET_CHARACTER,
                $membershipType,
                $destiny2MembershipId,
                $characterId
            )
        )->toArray();
    }
}

<?php

namespace Destiny2\Api\Objects\Fireteam\FireteamMember;

/**
 * FireteamMember
 *
 * No description
 */
class FireteamMember
{

    const TYPE = 'object';

    public $destinyUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $bungieNetUserInfo = [
        '$ref' => '#/components/schemas/User.UserInfoCard',
    ];

    public $characterId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $dateJoined = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $hasMicrophone = [
        'type' => 'boolean',
    ];

    public $lastPlatformInviteAttemptDate = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $lastPlatformInviteAttemptResult = [
        'type' => 'integer',
        'format' => 'byte',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Fireteam.FireteamPlatformInviteResult',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


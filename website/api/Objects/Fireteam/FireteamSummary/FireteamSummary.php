<?php

namespace Destiny2\Api\Objects\Fireteam\FireteamSummary;

/**
 * FireteamSummary
 *
 * No description
 */
class FireteamSummary
{

    const TYPE = 'object';

    public $fireteamId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $groupId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $platform = [
        'type' => 'integer',
        'format' => 'byte',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Fireteam.FireteamPlatform',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $activityType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Fireteam.FireteamActivityType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $isImmediate = [
        'type' => 'boolean',
    ];

    public $scheduledTime = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $ownerMembershipId = [
        'type' => 'integer',
        'format' => 'int64',
    ];

    public $playerSlotCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $alternateSlotCount = [
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $availablePlayerSlotCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $availableAlternateSlotCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $title = [
        'type' => 'string',
    ];

    public $dateCreated = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $dateModified = [
        'type' => 'string',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $isPublic = [
        'type' => 'boolean',
    ];

    public $locale = [
        'type' => 'string',
    ];

    public $isValid = [
        'type' => 'boolean',
    ];

    public $datePlayerModified = [
        'type' => 'string',
        'format' => 'date-time',
    ];


}


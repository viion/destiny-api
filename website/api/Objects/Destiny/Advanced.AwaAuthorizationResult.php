<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Advanced.AwaAuthorizationResult
 */
class Advanced.AwaAuthorizationResult
{

    const NAME = 'Destiny.Advanced.AwaAuthorizationResult';

    const TYPE = 'object';

    public $userSelection = [
        'type' => 'integer',
        'description' => 'Indication of how the user responded to the request. If the value is "Approved" the actionToken will contain the token that can be presented when performing the advanced write action.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Advanced.AwaUserSelection',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $responseReason = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Advanced.AwaResponseReason',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $developerNote = [
        'type' => 'string',
        'description' => 'Message to the app developer to help understand the response.',
    ];

    public $actionToken = [
        'type' => 'string',
        'description' => 'Credential used to prove the user authorized an advanced write action.',
    ];

    public $maximumNumberOfUses = [
        'type' => 'integer',
        'description' => 'This token may be used to perform the requested action this number of times, at a maximum. If this value is 0, then there is no limit.',
        'format' => 'int32',
    ];

    public $validUntil = [
        'type' => 'string',
        'description' => 'Time, UTC, when token expires.',
        'format' => 'date-time',
        'nullable' => true,
    ];

    public $type = [
        'type' => 'integer',
        'description' => 'Advanced Write Action Type from the permission request.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Advanced.AwaType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $membershipType = [
        'type' => 'integer',
        'description' => 'MembershipType from the permission request.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


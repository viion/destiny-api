<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Advanced.AwaPermissionRequested
 */
class Advanced.AwaPermissionRequested
{

    const NAME = 'Destiny.Advanced.AwaPermissionRequested';

    const TYPE = 'object';

    public $type = [
        'type' => 'integer',
        'description' => 'Type of advanced write action.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Advanced.AwaType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $affectedItemId = [
        'type' => 'integer',
        'description' => 'Item instance ID the action shall be applied to. This is optional for all but a new AwaType values. Rule of thumb is to provide the item instance ID if one is available.',
        'format' => 'int64',
        'nullable' => true,
    ];

    public $membershipType = [
        'type' => 'integer',
        'description' => 'Destiny membership type of the account to modify.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/BungieMembershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $characterId = [
        'type' => 'integer',
        'description' => 'Destiny character ID, if applicable, that will be affected by the action.',
        'format' => 'int64',
        'nullable' => true,
    ];


}


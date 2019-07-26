<?php

namespace Destiny2\Api\Objects\GroupsV2\GroupEditAction;

/**
 * GroupEditAction
 *
 * No description
 */
class GroupEditAction
{

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
    ];

    public $about = [
        'type' => 'string',
    ];

    public $motto = [
        'type' => 'string',
    ];

    public $theme = [
        'type' => 'string',
    ];

    public $avatarImageIndex = [
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
    ];

    public $tags = [
        'type' => 'string',
    ];

    public $isPublic = [
        'type' => 'boolean',
        'nullable' => true,
    ];

    public $membershipOption = [
        'enum' => [
            '0',
            '1',
            '2',
        ],
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'Reviewed',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Open',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'Closed',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $isPublicTopicAdminOnly = [
        'type' => 'boolean',
        'nullable' => true,
    ];

    public $allowChat = [
        'type' => 'boolean',
        'nullable' => true,
    ];

    public $chatSecurity = [
        'enum' => [
            '0',
            '1',
        ],
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'Group',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Admins',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $callsign = [
        'type' => 'string',
    ];

    public $locale = [
        'type' => 'string',
    ];

    public $homepage = [
        'enum' => [
            '0',
            '1',
            '2',
        ],
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'Wall',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Forum',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'AllianceForum',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $enableInvitationMessagingForAdmins = [
        'type' => 'boolean',
        'nullable' => true,
    ];

    public $defaultPublicity = [
        'enum' => [
            '0',
            '1',
            '2',
        ],
        'type' => 'integer',
        'format' => 'int32',
        'nullable' => true,
        'x-enum-values' => [
            [
                'numericValue' => '0',
                'identifier' => 'Public',
            ],
            [
                'numericValue' => '1',
                'identifier' => 'Alliance',
            ],
            [
                'numericValue' => '2',
                'identifier' => 'Private',
            ],
        ],
        'x-enum-is-bitmask' => false,
    ];


}


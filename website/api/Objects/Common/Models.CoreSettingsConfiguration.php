<?php

namespace Destiny2\Api\Objects\Common;

/**
 * Models.CoreSettingsConfiguration
 */
class Models.CoreSettingsConfiguration
{

    const NAME = 'Common.Models.CoreSettingsConfiguration';

    const TYPE = 'object';

    public $environment = [
        'type' => 'string',
    ];

    public $systems = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSystem',
        ],
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $ignoreReasons = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $forumCategories = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $groupAvatars = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $destinyMembershipTypes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $recruitmentPlatformTags = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $recruitmentMiscTags = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $recruitmentActivities = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $userContentLocales = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $systemContentLocales = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerDecals = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerDecalColors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerGonfalons = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerGonfalonColors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerGonfalonDetails = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerGonfalonDetailColors = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $clanBannerStandards = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Common.Models.CoreSetting',
        ],
    ];

    public $destiny2CoreSettings = [
        '$ref' => '#/components/schemas/Common.Models.Destiny2CoreSettings',
    ];

    public $emailSettings = [
        '$ref' => '#/components/schemas/User.EmailSettings',
    ];


}


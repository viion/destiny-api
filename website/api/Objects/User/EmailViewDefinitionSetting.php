<?php

namespace Destiny2\Api\Objects\User;

/**
 * EmailViewDefinitionSetting
 */
class EmailViewDefinitionSetting
{

    const NAME = 'User.EmailViewDefinitionSetting';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
        'description' => 'The identifier for this UI Setting, which can be used to relate it to custom strings or other data as desired.',
    ];

    public $localization = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/User.EMailSettingLocalization',
        ],
        'description' => 'A dictionary of localized text for the EMail setting, keyed by the locale.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $setByDefault = [
        'type' => 'boolean',
        'description' => 'If true, this setting should be set by default if the user hasn\'t chosen whether it\'s set or cleared yet.',
    ];

    public $optInAggregateValue = [
        'type' => 'integer',
        'description' => 'The OptInFlags value to set or clear if this setting is set or cleared in the UI. It is the aggregate of all underlying opt-in flags related to this setting.',
        'format' => 'int64',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/User.OptInFlags',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $subscriptions = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/User.EmailSubscriptionDefinition',
        ],
        'description' => 'The subscriptions to show as children of this setting, if any.',
    ];


}


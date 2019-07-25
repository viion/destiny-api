<?php

namespace Destiny2\Api\Objects\User;

/**
 * EmailSubscriptionDefinition
 */
class EmailSubscriptionDefinition
{

    const NAME = 'User.EmailSubscriptionDefinition';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
        'description' => 'The unique identifier for this subscription.',
    ];

    public $localization = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/User.EMailSettingSubscriptionLocalization',
        ],
        'description' => 'A dictionary of localized text for the EMail Opt-in setting, keyed by the locale.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $value = [
        'type' => 'integer',
        'description' => 'The bitflag value for this subscription. Should be a unique power of two value.',
        'format' => 'int64',
    ];


}


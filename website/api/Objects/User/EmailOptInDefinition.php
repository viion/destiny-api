<?php

namespace Destiny2\Api\Objects\User;

/**
 * EmailOptInDefinition
 */
class EmailOptInDefinition
{

    const NAME = 'User.EmailOptInDefinition';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
        'description' => 'The unique identifier for this opt-in category.',
    ];

    public $value = [
        'type' => 'integer',
        'description' => 'The flag value for this opt-in category. For historical reasons, this is defined as a flags enum.',
        'format' => 'int64',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/User.OptInFlags',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $setByDefault = [
        'type' => 'boolean',
        'description' => 'If true, this opt-in setting should be set by default in situations where accounts are created without explicit choices about what they\'re opting into.',
    ];

    public $dependentSubscriptions = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/User.EmailSubscriptionDefinition',
        ],
        'description' => 'Information about the dependent subscriptions for this opt-in.',
    ];


}


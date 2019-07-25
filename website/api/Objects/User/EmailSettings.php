<?php

namespace Destiny2\Api\Objects\User;

/**
 * EmailSettings
 */
class EmailSettings
{

    const NAME = 'User.EmailSettings';

    const TYPE = 'object';

    public $optInDefinitions = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/User.EmailOptInDefinition',
        ],
        'description' => 'Keyed by the name identifier of the opt-in definition.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $subscriptionDefinitions = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/User.EmailSubscriptionDefinition',
        ],
        'description' => 'Keyed by the name identifier of the Subscription definition.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];

    public $views = [
        'type' => 'object',
        'additionalProperties' => [
            '$ref' => '#/components/schemas/User.EmailViewDefinition',
        ],
        'description' => 'Keyed by the name identifier of the View definition.',
        'x-dictionary-key' => [
            'type' => 'string',
        ],
    ];


}


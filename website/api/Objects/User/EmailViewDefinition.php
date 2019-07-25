<?php

namespace Destiny2\Api\Objects\User;

/**
 * EmailViewDefinition
 */
class EmailViewDefinition
{

    const NAME = 'User.EmailViewDefinition';

    const TYPE = 'object';

    public $name = [
        'type' => 'string',
        'description' => 'The identifier for this view.',
    ];

    public $viewSettings = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/User.EmailViewDefinitionSetting',
        ],
        'description' => 'The ordered list of settings to show in this view.',
    ];


}


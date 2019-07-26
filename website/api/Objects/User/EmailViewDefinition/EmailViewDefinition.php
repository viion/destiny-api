<?php

namespace Destiny2\Api\Objects\User\EmailViewDefinition;

/**
 * EmailViewDefinition
 *
 * Represents a data-driven view for Email settings. Web/Mobile UI can use this
 * data to show new EMail settings consistently without further manual work.
 */
class EmailViewDefinition
{

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


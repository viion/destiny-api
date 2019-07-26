<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Items\DestinyParentItemOverride;

/**
 * DestinyParentItemOverride
 *
 * No description
 */
class DestinyParentItemOverride
{

    const TYPE = 'object';

    public $additionalEquipRequirementsDisplayStrings = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
        ],
    ];

    public $pipIcon = [
        'type' => 'string',
    ];


}


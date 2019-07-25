<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyMaterialRequirement
 */
class Definitions.DestinyMaterialRequirement
{

    const NAME = 'Destiny.Definitions.DestinyMaterialRequirement';

    const TYPE = 'object';

    public $itemHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the material required. Use it to look up the material\'s DestinyInventoryItemDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $deleteOnAction = [
        'type' => 'boolean',
        'description' => 'If True, the material will be removed from the character\'s inventory when the action is performed.',
    ];

    public $count = [
        'type' => 'integer',
        'description' => 'The amount of the material required.',
        'format' => 'int32',
    ];

    public $omitFromRequirements = [
        'type' => 'boolean',
        'description' => 'If True, this requirement is "silent": don\'t bother showing it in a material requirements display. I mean, I\'m not your mom: I\'m not going to tell you you *can\'t* show it. But we won\'t show it in our UI.',
    ];


}


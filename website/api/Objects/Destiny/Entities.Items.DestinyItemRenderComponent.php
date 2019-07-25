<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Items.DestinyItemRenderComponent
 */
class Entities.Items.DestinyItemRenderComponent
{

    const NAME = 'Destiny.Entities.Items.DestinyItemRenderComponent';

    const TYPE = 'object';

    public $useCustomDyes = [
        'type' => 'boolean',
        'description' => 'If you should use custom dyes on this item, it will be indicated here.',
    ];

    public $artRegions = [
        'type' => 'object',
        'additionalProperties' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'A dictionary for rendering gear components, with:
key = Art Arrangement Region Index
value = The chosen Arrangement Index for the Region, based on the value of a stat on the item used for making the choice.',
        'x-dictionary-key' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
    ];


}


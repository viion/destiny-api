<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyTalentNodeCategory;

/**
 * DestinyTalentNodeCategory
 *
 * An artificial construct provided by Bungie.Net, where we attempt to group talent
 * nodes by functionality.
 * This is a single set of references to Talent Nodes that share a common trait or
 * purpose.
 */
class DestinyTalentNodeCategory
{

    const TYPE = 'object';

    public $identifier = [
        'type' => 'string',
        'description' => 'Mostly just for debug purposes, but if you find it useful you can have it. This is BNet\'s manually created identifier for this category.',
    ];

    public $isLoreDriven = [
        'type' => 'boolean',
        'description' => 'If true, we found the localized content in a related DestinyLoreDefinition instead of local BNet localization files. This is mostly for ease of my own future investigations.',
    ];

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Will contain at least the "name", which will be the title of the category. We will likely not have description and an icon yet, but I\'m going to keep my options open.',
    ];

    public $nodeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'The set of all hash identifiers for Talent Nodes (DestinyTalentNodeDefinition) in this Talent Grid that are part of this Category.',
    ];


}


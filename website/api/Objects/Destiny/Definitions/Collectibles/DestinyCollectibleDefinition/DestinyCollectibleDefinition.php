<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Collectibles\DestinyCollectibleDefinition;

/**
 * DestinyCollectibleDefinition
 *
 * Defines a
 */
class DestinyCollectibleDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'Indicates whether this Collectible\'s state is determined on a per-character or on an account-wide basis.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $sourceString = [
        'type' => 'string',
        'description' => 'A human readable string for a hint about how to acquire the item.',
    ];

    public $sourceHash = [
        'type' => 'integer',
        'description' => 'This is a hash identifier we are building on the BNet side in an attempt to let people group collectibles by similar sources.
I can\'t promise that it\'s going to be 100% accurate, but if the designers were consistent in assigning the same source strings to items with the same sources, it *ought to* be. No promises though.
This hash also doesn\'t relate to an actual definition, just to note: we\'ve got nothing useful other than the source string for this data.',
        'format' => 'uint32',
        'nullable' => true,
    ];

    public $itemHash = [
        'type' => 'integer',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyInventoryItemDefinition',
        ],
    ];

    public $acquisitionInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Collectibles.DestinyCollectibleAcquisitionBlock',
    ];

    public $stateInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Collectibles.DestinyCollectibleStateBlock',
    ];

    public $presentationInfo = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationChildBlock',
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}


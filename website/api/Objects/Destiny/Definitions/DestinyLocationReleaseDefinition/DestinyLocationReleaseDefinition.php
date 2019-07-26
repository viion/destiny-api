<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyLocationReleaseDefinition;

/**
 * DestinyLocationReleaseDefinition
 *
 * A specific "spot" referred to by a location. Only one of these can be active at
 * a time for a given Location.
 */
class DestinyLocationReleaseDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
            ],
        ],
        'description' => 'Sadly, these don\'t appear to be populated anymore (ever?)',
    ];

    public $smallTransparentIcon = [
        'type' => 'string',
    ];

    public $mapIcon = [
        'type' => 'string',
    ];

    public $largeTransparentIcon = [
        'type' => 'string',
    ];

    public $spawnPoint = [
        'type' => 'integer',
        'description' => 'If we had map information, this spawnPoint would be interesting. But sadly, we don\'t have that info.',
        'format' => 'uint32',
    ];

    public $destinationHash = [
        'type' => 'integer',
        'description' => 'The Destination being pointed to by this location.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationDefinition',
        ],
    ];

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The Activity being pointed to by this location.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $activityGraphHash = [
        'type' => 'integer',
        'description' => 'The Activity Graph being pointed to by this location.',
        'format' => 'uint32',
    ];

    public $activityGraphNodeHash = [
        'type' => 'integer',
        'description' => 'The Activity Graph Node being pointed to by this location. (Remember that Activity Graph Node hashes are only unique within an Activity Graph: so use the combination to find the node being spoken of)',
        'format' => 'uint32',
    ];

    public $activityBubbleName = [
        'type' => 'integer',
        'description' => 'The Activity Bubble within the Destination. Look this up in the DestinyDestinationDefinition\'s bubbles and bubbleSettings properties.',
        'format' => 'uint32',
    ];

    public $activityPathBundle = [
        'type' => 'integer',
        'description' => 'If we had map information, this would tell us something cool about the path this location wants you to take. I wish we had map information.',
        'format' => 'uint32',
    ];

    public $activityPathDestination = [
        'type' => 'integer',
        'description' => 'If we had map information, this would tell us about path information related to destination on the map. Sad. Maybe you can do something cool with it. Go to town man.',
        'format' => 'uint32',
    ];

    public $navPointType = [
        'type' => 'integer',
        'description' => 'The type of Nav Point that this represents. See the enumeration for more info.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyActivityNavPointType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $worldPosition = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'Looks like it should be the position on the map, but sadly it does not look populated... yet?',
    ];


}


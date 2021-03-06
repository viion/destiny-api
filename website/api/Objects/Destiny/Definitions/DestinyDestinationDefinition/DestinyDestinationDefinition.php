<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyDestinationDefinition;

/**
 * DestinyDestinationDefinition
 *
 * On to one of the more confusing subjects of the API. What is a Destination, and
 * what is the relationship between it, Activities, Locations, and Places?
 * A "Destination" is a specific region/city/area of a larger "Place". For
 * instance, a Place might be Earth where a Destination might be Bellevue,
 * Washington. (Please, pick a more interesting destination if you come to visit
 * Earth).
 */
class DestinyDestinationDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $placeHash = [
        'type' => 'integer',
        'description' => 'The place that "owns" this Destination. Use this hash to look up the DestinyPlaceDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyPlaceDefinition',
        ],
    ];

    public $defaultFreeroamActivityHash = [
        'type' => 'integer',
        'description' => 'If this Destination has a default Free-Roam activity, this is the hash for that Activity. Use it to look up the DestinyActivityDefintion.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];

    public $activityGraphEntries = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityGraphListEntryDefinition',
        ],
        'description' => 'If the Destination has default Activity Graphs (i.e. "Map") that should be shown in the director, this is the list of those Graphs. At most, only one should be active at any given time for a Destination: these would represent, for example, different variants on a Map if the Destination is changing on a macro level based on game state.',
    ];

    public $bubbleSettings = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyDestinationBubbleSettingDefinition',
        ],
        'description' => 'A Destination may have many "Bubbles" zones with human readable properties.
We don\'t get as much info as I\'d like about them - I\'d love to return info like where on the map they are located - but at least this gives you the name of those bubbles. bubbleSettings and bubbles both have the identical number of entries, and you should match up their indexes to provide matching bubble and bubbleSettings data.
DEPRECATED - Just use bubbles, it now has this data.',
    ];

    public $bubbles = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyBubbleDefinition',
        ],
        'description' => 'This provides the unique identifiers for every bubble in the destination (only guaranteed unique within the destination), and any intrinsic properties of the bubble.
bubbleSettings and bubbles both have the identical number of entries, and you should match up their indexes to provide matching bubble and bubbleSettings data.',
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


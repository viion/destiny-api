<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyLocationDefinition
 */
class Definitions.DestinyLocationDefinition
{

    const NAME = 'Destiny.Definitions.DestinyLocationDefinition';

    const TYPE = 'object';

    public $vendorHash = [
        'type' => 'integer',
        'description' => 'If the location has a Vendor on it, this is the hash identifier for that Vendor. Look them up with DestinyVendorDefinition.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyVendorDefinition',
        ],
    ];

    public $locationReleases = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyLocationReleaseDefinition',
        ],
        'description' => 'A Location may refer to different specific spots in the world based on the world\'s current state. This is a list of those potential spots, and the data we can use at runtime to determine which one of the spots is the currently valid one.',
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


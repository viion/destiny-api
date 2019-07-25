<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyVendorGroupDefinition
 */
class Definitions.DestinyVendorGroupDefinition
{

    const NAME = 'Destiny.Definitions.DestinyVendorGroupDefinition';

    const TYPE = 'object';

    public $order = [
        'type' => 'integer',
        'description' => 'The recommended order in which to render the groups, Ascending order.',
        'format' => 'int32',
    ];

    public $categoryName = [
        'type' => 'string',
        'description' => 'For now, a group just has a name.',
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


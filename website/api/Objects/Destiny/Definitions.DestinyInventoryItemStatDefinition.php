<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyInventoryItemStatDefinition
 */
class Definitions.DestinyInventoryItemStatDefinition
{

    const NAME = 'Destiny.Definitions.DestinyInventoryItemStatDefinition';

    const TYPE = 'object';

    public $statHash = [
        'type' => 'integer',
        'description' => 'The hash for the DestinyStatDefinition representing this stat.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
    ];

    public $value = [
        'type' => 'integer',
        'description' => 'This value represents the stat value assuming the minimum possible roll but accounting for any mandatory bonuses that should be applied to the stat on item creation.
In Destiny 1, this was different from the "minimum" value because there were certain conditions where an item could be theoretically lower level/value than the initial roll. 
In Destiny 2, this is not possible unless Talent Grids begin to be used again for these purposes or some other system change occurs... thus in practice, value and minimum should be the same in Destiny 2. Good riddance.',
        'format' => 'int32',
    ];

    public $minimum = [
        'type' => 'integer',
        'description' => 'The minimum possible value for this stat that we think the item can roll.',
        'format' => 'int32',
    ];

    public $maximum = [
        'type' => 'integer',
        'description' => 'The maximum possible value for this stat that we think the item can roll.
WARNING: In Destiny 1, this field was calculated using the potential stat rolls on the item\'s talent grid. In Destiny 2, items no longer have meaningful talent grids and instead have sockets: but the calculation of this field was never altered to adapt to this change. As such, this field should be considered deprecated until we can address this oversight.',
        'format' => 'int32',
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * DestinyStat
 */
class DestinyStat
{

    const NAME = 'Destiny.DestinyStat';

    const TYPE = 'object';

    public $statHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the Stat. Use it to look up the DestinyStatDefinition for static data about the stat.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyStatDefinition',
        ],
    ];

    public $value = [
        'type' => 'integer',
        'description' => 'The current value of the Stat.',
        'format' => 'int32',
    ];

    public $maximumValue = [
        'type' => 'integer',
        'description' => 'The highest possible value for the stat, if we were able to compute it. (I wouldn\'t necessarily trust this value right now. I would like to improve its calculation in later iterations of the API. Consider this a placeholder for desired future functionality)',
        'format' => 'int32',
    ];


}


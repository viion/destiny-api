<?php

namespace Destiny2\Api\Objects\Applications\Datapoint;

/**
 * Datapoint
 *
 * No description
 */
class Datapoint
{

    const TYPE = 'object';

    public $time = [
        'type' => 'string',
        'description' => 'Timestamp for the related count.',
        'format' => 'date-time',
    ];

    public $count = [
        'type' => 'number',
        'description' => 'Count associated with timestamp',
        'format' => 'double',
        'nullable' => true,
    ];


}


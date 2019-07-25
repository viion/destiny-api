<?php

namespace Destiny2\Api\Objects\Applications;

/**
 * Datapoint
 */
class Datapoint
{

    const NAME = 'Applications.Datapoint';

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


<?php

namespace Destiny2\Api\Objects\Applications\Series;

/**
 * Series
 *
 * No description
 */
class Series
{

    const TYPE = 'object';

    public $datapoints = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Applications.Datapoint',
        ],
        'description' => 'Collection of samples with time and value.',
    ];

    public $target = [
        'type' => 'string',
        'description' => 'Target to which to datapoints apply.',
    ];


}


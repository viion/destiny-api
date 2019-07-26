<?php

namespace Destiny2\Api\Objects\Applications\ApiUsage;

/**
 * ApiUsage
 *
 * No description
 */
class ApiUsage
{

    const TYPE = 'object';

    public $range = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Dates.DateRange',
            ],
        ],
        'description' => 'The date range for the data being reported.',
    ];

    public $apiCalls = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Applications.Series',
        ],
        'description' => 'Counts for on API calls made for the time range.',
    ];

    public $throttledRequests = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Applications.Series',
        ],
        'description' => 'Instances of blocked requests or requests that crossed the warn threshold during the time range.',
    ];


}


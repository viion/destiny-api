<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * GlobalAlert
 */
class GlobalAlert
{

    const NAME = 'GlobalAlert';

    const TYPE = 'object';

    public $AlertKey = [
        'type' => 'string',
    ];

    public $AlertHtml = [
        'type' => 'string',
    ];

    public $AlertTimestamp = [
        'type' => 'string',
        'format' => 'date-time',
    ];

    public $AlertLink = [
        'type' => 'string',
    ];

    public $AlertLevel = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GlobalAlertLevel',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $AlertType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/GlobalAlertType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $StreamInfo = [
        '$ref' => '#/components/schemas/StreamInfo',
    ];


}


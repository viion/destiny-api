<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Records\DestinyRecordCompletionBlock;

/**
 * DestinyRecordCompletionBlock
 *
 * No description
 */
class DestinyRecordCompletionBlock
{

    const TYPE = 'object';

    public $partialCompletionObjectiveCountThreshold = [
        'type' => 'integer',
        'description' => 'The number of objectives that must be completed before the objective is considered "complete"',
        'format' => 'int32',
    ];

    public $ScoreValue = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $shouldFireToast = [
        'type' => 'boolean',
    ];

    public $toastStyle = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyRecordToastStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


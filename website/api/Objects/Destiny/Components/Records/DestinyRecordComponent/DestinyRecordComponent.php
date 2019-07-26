<?php

namespace Destiny2\Api\Objects\Destiny\Components\Records\DestinyRecordComponent;

/**
 * DestinyRecordComponent
 *
 * No description
 */
class DestinyRecordComponent
{

    const TYPE = 'object';

    public $state = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyRecordState',
        ],
        'x-enum-is-bitmask' => true,
    ];

    public $objectives = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Quests.DestinyObjectiveProgress',
        ],
    ];


}


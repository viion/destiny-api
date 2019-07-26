<?php

namespace Destiny2\Api\Objects\Destiny\DestinyEquipItemResults;

/**
 * DestinyEquipItemResults
 *
 * The results of a bulk Equipping operation performed through the Destiny API.
 */
class DestinyEquipItemResults
{

    const TYPE = 'object';

    public $equipResults = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyEquipItemResult',
        ],
    ];


}


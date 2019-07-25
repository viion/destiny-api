<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * DestinyEquipItemResults
 */
class DestinyEquipItemResults
{

    const NAME = 'Destiny.DestinyEquipItemResults';

    const TYPE = 'object';

    public $equipResults = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.DestinyEquipItemResult',
        ],
    ];


}


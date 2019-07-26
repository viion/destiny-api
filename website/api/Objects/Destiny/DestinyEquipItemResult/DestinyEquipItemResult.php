<?php

namespace Destiny2\Api\Objects\Destiny\DestinyEquipItemResult;

/**
 * DestinyEquipItemResult
 *
 * The results of an Equipping operation performed through the Destiny API.
 */
class DestinyEquipItemResult
{

    const TYPE = 'object';

    public $itemInstanceId = [
        'type' => 'integer',
        'description' => 'The instance ID of the item in question (all items that can be equipped must, but definition, be Instanced and thus have an Instance ID that you can use to refer to them)',
        'format' => 'int64',
    ];

    public $equipStatus = [
        'type' => 'integer',
        'description' => 'A PlatformErrorCodes enum indicating whether it succeeded, and if it failed why.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Exceptions.PlatformErrorCodes',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Sockets\DestinyInsertPlugActionDefinition;

/**
 * DestinyInsertPlugActionDefinition
 *
 * Data related to what happens while a plug is being inserted, mostly for UI
 * purposes.
 */
class DestinyInsertPlugActionDefinition
{

    const TYPE = 'object';

    public $actionExecuteSeconds = [
        'type' => 'integer',
        'description' => 'How long it takes for the Plugging of the item to be completed once it is initiated, if you care.',
        'format' => 'int32',
    ];

    public $actionType = [
        'type' => 'integer',
        'description' => 'The type of action being performed when you act on this Socket Type. The most common value is "insert plug", but there are others as well (for instance, a "Masterwork" socket may allow for Re-initialization, and an Infusion socket allows for items to be consumed to upgrade the item)',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.SocketTypeActionType',
        ],
        'x-enum-is-bitmask' => false,
    ];


}


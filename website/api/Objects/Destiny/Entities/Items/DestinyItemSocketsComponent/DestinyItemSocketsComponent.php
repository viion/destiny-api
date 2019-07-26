<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Items\DestinyItemSocketsComponent;

/**
 * DestinyItemSocketsComponent
 *
 * Instanced items can have sockets, which are slots on the item where plugs can be
 * inserted.
 * Sockets are a bit complex: be sure to examine the documentation on the
 * DestinyInventoryItemDefinition's "socket" block and elsewhere on these objects
 * for more details.
 */
class DestinyItemSocketsComponent
{

    const TYPE = 'object';

    public $sockets = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemSocketState',
        ],
        'description' => 'The list of all sockets on the item, and their status information.',
    ];


}


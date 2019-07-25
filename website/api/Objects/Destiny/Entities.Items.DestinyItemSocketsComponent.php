<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Items.DestinyItemSocketsComponent
 */
class Entities.Items.DestinyItemSocketsComponent
{

    const NAME = 'Destiny.Entities.Items.DestinyItemSocketsComponent';

    const TYPE = 'object';

    public $sockets = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemSocketState',
        ],
        'description' => 'The list of all sockets on the item, and their status information.',
    ];


}


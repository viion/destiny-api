<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Character.DestinyCharacterPeerView
 */
class Character.DestinyCharacterPeerView
{

    const NAME = 'Destiny.Character.DestinyCharacterPeerView';

    const TYPE = 'object';

    public $equipment = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Character.DestinyItemPeerView',
        ],
    ];


}


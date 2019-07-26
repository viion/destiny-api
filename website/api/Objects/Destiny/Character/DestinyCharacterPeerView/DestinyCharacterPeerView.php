<?php

namespace Destiny2\Api\Objects\Destiny\Character\DestinyCharacterPeerView;

/**
 * DestinyCharacterPeerView
 *
 * A minimal view of a character's equipped items, for the purpose of rendering a
 * summary screen or showing the character in 3D.
 */
class DestinyCharacterPeerView
{

    const TYPE = 'object';

    public $equipment = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Character.DestinyItemPeerView',
        ],
    ];


}


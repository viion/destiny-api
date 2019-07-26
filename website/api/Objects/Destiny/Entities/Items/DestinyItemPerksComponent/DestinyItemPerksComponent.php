<?php

namespace Destiny2\Api\Objects\Destiny\Entities\Items\DestinyItemPerksComponent;

/**
 * DestinyItemPerksComponent
 *
 * Instanced items can have perks: benefits that the item bestows.
 * These are related to DestinySandboxPerkDefinition, and sometimes - but not
 * always - have human readable info. When they do, they are the icons and text
 * that you see in an item's tooltip.
 * Talent Grids, Sockets, and the item itself can apply Perks, which are then
 * summarized here for your convenience.
 */
class DestinyItemPerksComponent
{

    const TYPE = 'object';

    public $perks = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Perks.DestinyPerkReference',
        ],
        'description' => 'The list of perks to display in an item tooltip - and whether or not they have been activated.',
    ];


}

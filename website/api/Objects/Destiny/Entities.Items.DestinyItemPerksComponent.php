<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Entities.Items.DestinyItemPerksComponent
 */
class Entities.Items.DestinyItemPerksComponent
{

    const NAME = 'Destiny.Entities.Items.DestinyItemPerksComponent';

    const TYPE = 'object';

    public $perks = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Perks.DestinyPerkReference',
        ],
        'description' => 'The list of perks to display in an item tooltip - and whether or not they have been activated.',
    ];


}


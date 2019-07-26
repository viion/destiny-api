<?php

namespace Destiny2\Api\Objects\Destiny\Perks\DestinyPerkReference;

/**
 * DestinyPerkReference
 *
 * The list of perks to display in an item tooltip - and whether or not they have
 * been activated.
 * Perks apply a variety of effects to a character, and are generally either
 * intrinsic to the item or provided in activated talent nodes or sockets.
 */
class DestinyPerkReference
{

    const TYPE = 'object';

    public $perkHash = [
        'type' => 'integer',
        'description' => 'The hash identifier for the perk, which can be used to look up DestinySandboxPerkDefinition if it exists. Be warned, perks frequently do not have user-viewable information. You should examine whether you actually found a name/description in the perk\'s definition before you show it to the user.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinySandboxPerkDefinition',
        ],
    ];

    public $iconPath = [
        'type' => 'string',
        'description' => 'The icon for the perk.',
    ];

    public $isActive = [
        'type' => 'boolean',
        'description' => 'Whether this perk is currently active. (We may return perks that you have not actually activated yet: these represent perks that you should show in the item\'s tooltip, but that the user has not yet activated.)',
    ];

    public $visible = [
        'type' => 'boolean',
        'description' => 'Some perks provide benefits, but aren\'t visible in the UI. This value will let you know if this is perk should be shown in your UI.',
    ];


}


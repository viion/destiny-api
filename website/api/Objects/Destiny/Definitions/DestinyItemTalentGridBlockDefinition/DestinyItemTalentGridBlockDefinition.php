<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemTalentGridBlockDefinition;

/**
 * DestinyItemTalentGridBlockDefinition
 *
 * This defines information that can only come from a talent grid on an item. Items
 * mostly have negligible talent grid data these days, but instanced items still
 * retain grids as a source for some of this common information.
 * Builds/Subclasses are the only items left that still have talent grids with
 * meaningful Nodes.
 */
class DestinyItemTalentGridBlockDefinition
{

    const TYPE = 'object';

    public $talentGridHash = [
        'type' => 'integer',
        'description' => 'The hash identifier of the DestinyTalentGridDefinition attached to this item.',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyTalentGridDefinition',
        ],
    ];

    public $itemDetailString = [
        'type' => 'string',
        'description' => 'This is meant to be a subtitle for looking at the talent grid. In practice, somewhat frustratingly, this always merely says the localized word for "Details". Great. Maybe it\'ll have more if talent grids ever get used for more than builds and subclasses again.',
    ];

    public $buildName = [
        'type' => 'string',
        'description' => 'A shortcut string identifier for the "build" in question, if this talent grid has an associated build. Doesn\'t map to anything we can expose at the moment.',
    ];

    public $hudDamageType = [
        'type' => 'integer',
        'description' => 'If the talent grid implies a damage type, this is the enum value for that damage type.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DamageType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $hudIcon = [
        'type' => 'string',
        'description' => 'If the talent grid has a special icon that\'s shown in the game UI (like builds, funny that), this is the identifier for that icon. Sadly, we don\'t actually get that icon right now. I\'ll be looking to replace this with a path to the actual icon itself.',
    ];


}


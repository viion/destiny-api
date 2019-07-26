<?php

namespace Destiny2\Api\Enums\Destiny\DestinyItemSubType;

/**
 * DestinyItemSubType
 *
 * This Enumeration further classifies items by more specific categorizations than
 * DestinyItemType. The "Sub-Type" is where we classify and categorize items one
 * step further in specificity: "Auto Rifle" instead of just "Weapon" for example,
 * or "Vanguard Bounty" instead of merely "Bounty".
 * These sub-types are provided for historical compatibility with Destiny 1, but an
 * ideal alternative is to use DestinyItemCategoryDefinitions and the
 * DestinyItemDefinition.itemCategories property instead. Item Categories allow for
 * arbitrary hierarchies of specificity, and for items to belong to multiple
 * categories across multiple hierarchies simultaneously. For this enum, we pick a
 * single type as a "best guess" fit.
 * NOTE: This is not all of the item types available, and some of these are
 * holdovers from Destiny 1 that may or may not still exist.
 */
class DestinyItemSubType
{

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '1',
        '2',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        '11',
        '12',
        '13',
        '14',
        '16',
        '17',
        '18',
        '19',
        '20',
        '21',
        '22',
        '23',
        '24',
        '25',
        '26',
        '27',
        '28',
        '29',
        '30',
        '31',
    ];

    const ENUMS = [
        'None' => '0',
        'Crucible' => '1',
        'Vanguard' => '2',
        'Exotic' => '5',
        'AutoRifle' => '6',
        'Shotgun' => '7',
        'Machinegun' => '8',
        'HandCannon' => '9',
        'RocketLauncher' => '10',
        'FusionRifle' => '11',
        'SniperRifle' => '12',
        'PulseRifle' => '13',
        'ScoutRifle' => '14',
        'Crm' => '16',
        'Sidearm' => '17',
        'Sword' => '18',
        'Mask' => '19',
        'Shader' => '20',
        'Ornament' => '21',
        'FusionRifleLine' => '22',
        'GrenadeLauncher' => '23',
        'SubmachineGun' => '24',
        'TraceRifle' => '25',
        'HelmetArmor' => '26',
        'GauntletsArmor' => '27',
        'ChestArmor' => '28',
        'LegArmor' => '29',
        'ClassArmor' => '30',
        'Bow' => '31',
    ];


}


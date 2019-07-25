<?php

namespace Destiny2\Api\Enums\Destiny;

/**
 * DestinyComponentType
 */
class DestinyComponentType
{

    const NAME = 'Destiny.DestinyComponentType';

    const TYPE = 'integer';

    const TYPE_FORMAT = 'int32';

    const ENUMS_ALLOWED = [
        '0',
        '100',
        '101',
        '102',
        '103',
        '104',
        '105',
        '200',
        '201',
        '202',
        '203',
        '204',
        '205',
        '300',
        '301',
        '302',
        '303',
        '304',
        '305',
        '306',
        '307',
        '308',
        '400',
        '401',
        '402',
        '500',
        '600',
        '700',
        '800',
        '900',
    ];

    const ENUMS = [
        'None' => '0',
        'Profiles' => '100',
        'VendorReceipts' => '101',
        'ProfileInventories' => '102',
        'ProfileCurrencies' => '103',
        'ProfileProgression' => '104',
        'PlatformSilver' => '105',
        'Characters' => '200',
        'CharacterInventories' => '201',
        'CharacterProgressions' => '202',
        'CharacterRenderData' => '203',
        'CharacterActivities' => '204',
        'CharacterEquipment' => '205',
        'ItemInstances' => '300',
        'ItemObjectives' => '301',
        'ItemPerks' => '302',
        'ItemRenderData' => '303',
        'ItemStats' => '304',
        'ItemSockets' => '305',
        'ItemTalentGrids' => '306',
        'ItemCommonData' => '307',
        'ItemPlugStates' => '308',
        'Vendors' => '400',
        'VendorCategories' => '401',
        'VendorSales' => '402',
        'Kiosks' => '500',
        'CurrencyLookups' => '600',
        'PresentationNodes' => '700',
        'Collectibles' => '800',
        'Records' => '900',
    ];


}


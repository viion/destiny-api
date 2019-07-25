<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Kiosks.DestinyKioskItem
 */
class Components.Kiosks.DestinyKioskItem
{

    const NAME = 'Destiny.Components.Kiosks.DestinyKioskItem';

    const TYPE = 'object';

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the item in the related DestinyVendorDefintion\'s itemList property, representing the sale.',
        'format' => 'int32',
    ];

    public $canAcquire = [
        'type' => 'boolean',
        'description' => 'If true, the user can not only see the item, but they can acquire it. It is possible that a user can see a kiosk item and not be able to acquire it.',
    ];

    public $failureIndexes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'int32',
        ],
        'description' => 'Indexes into failureStrings for the Vendor, indicating the reasons why it failed if any.',
    ];

    public $flavorObjective = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Quests.DestinyObjectiveProgress',
            ],
        ],
        'description' => 'I may regret naming it this way - but this represents when an item has an objective that doesn\'t serve a beneficial purpose, but rather is used for "flavor" or additional information. For instance, when Emblems track specific stats, those stats are represented as Objectives on the item.',
    ];


}


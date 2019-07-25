<?php

namespace Destiny2\Api\Objects\Common;

/**
 * Models.Destiny2CoreSettings
 */
class Models.Destiny2CoreSettings
{

    const NAME = 'Common.Models.Destiny2CoreSettings';

    const TYPE = 'object';

    public $collectionRootNode = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $badgesRootNode = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $recordsRootNode = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $medalsRootNode = [
        'type' => 'integer',
        'format' => 'uint32',
    ];

    public $currentRankProgressionHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
    ];

    public $undiscoveredCollectibleImage = [
        'type' => 'string',
    ];

    public $ammoTypeHeavyIcon = [
        'type' => 'string',
    ];

    public $ammoTypeSpecialIcon = [
        'type' => 'string',
    ];

    public $ammoTypePrimaryIcon = [
        'type' => 'string',
    ];


}


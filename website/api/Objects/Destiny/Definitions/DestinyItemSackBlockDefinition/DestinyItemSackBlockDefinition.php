<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemSackBlockDefinition;

/**
 * DestinyItemSackBlockDefinition
 *
 * Some items are "sacks" - they can be "opened" to produce other items. This is
 * information related to its sack status, mostly UI strings. Engrams are an
 * example of items that are considered to be "Sacks".
 */
class DestinyItemSackBlockDefinition
{

    const TYPE = 'object';

    public $detailAction = [
        'type' => 'string',
        'description' => 'A description of what will happen when you open the sack. As far as I can tell, this is blank currently. Unknown whether it will eventually be populated with useful info.',
    ];

    public $openAction = [
        'type' => 'string',
        'description' => 'The localized name of the action being performed when you open the sack.',
    ];

    public $selectItemCount = [
        'type' => 'integer',
        'format' => 'int32',
    ];

    public $vendorSackType = [
        'type' => 'string',
    ];

    public $openOnAcquire = [
        'type' => 'boolean',
    ];


}


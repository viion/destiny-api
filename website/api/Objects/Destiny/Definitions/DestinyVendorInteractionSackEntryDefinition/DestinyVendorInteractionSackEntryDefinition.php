<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyVendorInteractionSackEntryDefinition;

/**
 * DestinyVendorInteractionSackEntryDefinition
 *
 * Compare this sackType to the sack identifier in the
 * DestinyInventoryItemDefinition.vendorSackType property of items. If they match,
 * show this sack with this interaction.
 */
class DestinyVendorInteractionSackEntryDefinition
{

    const TYPE = 'object';

    public $sackType = [
        'type' => 'integer',
        'format' => 'uint32',
    ];


}


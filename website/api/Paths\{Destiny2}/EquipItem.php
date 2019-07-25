<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Equip an item. You must have a valid Destiny Account, and either be in a
 * social space, in orbit, or offline.
 */
class EquipItem
{
    const NAME           = 'Destiny2.EquipItem';
    const URI            = '/Destiny2/Actions/Items/EquipItem/';
    const METHOD         = 'POST';
    const TAGS           = '{tags}';
    const OPERATION_ID   = '{operationId}';

    const IS_PREVIEW     = {is_preview};
    const IS_DEPRECATED  = {is_deprecated};

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        
    ];

    public static function build()
    {

    }
}

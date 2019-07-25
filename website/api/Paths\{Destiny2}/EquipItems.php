<?php

namespace Destiny2\Api\Paths\{Destiny2};

/**
 * Equip a list of items by itemInstanceIds. You must have a valid Destiny
 * Account, and either be in a social space, in orbit, or offline. Any items
 * not found on your character will be ignored.
 */
class EquipItems
{
    const NAME           = 'Destiny2.EquipItems';
    const URI            = '/Destiny2/Actions/Items/EquipItems/';
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

<?php

namespace Destiny2\Api\Paths\Destiny2\EquipItems;

/**
 * EquipItems
 *
 * Equip a list of items by itemInstanceIds. You must have a valid Destiny Account,
 * and either be in a social space, in orbit, or offline. Any items not found on
 * your character will be ignored.
 */
class EquipItems
{

    const SUMMARY = 'Destiny2.EquipItems';

    const URI = '/Destiny2/Actions/Items/EquipItems/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


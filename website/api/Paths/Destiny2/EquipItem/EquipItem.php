<?php

namespace Destiny2\Api\Paths\Destiny2\EquipItem;

/**
 * EquipItem
 *
 * Equip an item. You must have a valid Destiny Account, and either be in a social
 * space, in orbit, or offline.
 */
class EquipItem
{

    const SUMMARY = 'Destiny2.EquipItem';

    const URI = '/Destiny2/Actions/Items/EquipItem/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


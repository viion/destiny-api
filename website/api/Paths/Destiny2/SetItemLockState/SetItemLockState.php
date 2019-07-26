<?php

namespace Destiny2\Api\Paths\Destiny2\SetItemLockState;

/**
 * SetItemLockState
 *
 * Set the Lock State for an instanced item. You must have a valid Destiny Account.
 */
class SetItemLockState
{

    const SUMMARY = 'Destiny2.SetItemLockState';

    const URI = '/Destiny2/Actions/Items/SetLockState/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


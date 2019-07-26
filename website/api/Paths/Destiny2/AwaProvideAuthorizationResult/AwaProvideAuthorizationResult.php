<?php

namespace Destiny2\Api\Paths\Destiny2\AwaProvideAuthorizationResult;

/**
 * AwaProvideAuthorizationResult
 *
 * Provide the result of the user interaction. Called by the Bungie Destiny App to
 * approve or reject a request.
 */
class AwaProvideAuthorizationResult
{

    const SUMMARY = 'Destiny2.AwaProvideAuthorizationResult';

    const URI = '/Destiny2/Awa/AwaProvideAuthorizationResult/';

    const METHOD = 'POST';

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


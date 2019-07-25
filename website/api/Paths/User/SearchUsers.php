<?php

namespace Destiny2\Api\Paths\User;

/**
 * SearchUsers
 *
 * Returns a list of possible users based on the search string
 */
class SearchUsers
{

    const NAME = 'User.SearchUsers';

    const URI = '/User/SearchUsers/';

    const METHOD = 'GET';

    const TAGS = [
        'User',
    ];

    const OPERATION_ID = 'User.SearchUsers';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/ListOfGeneralUser',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


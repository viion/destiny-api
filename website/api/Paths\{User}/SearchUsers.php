<?php

namespace Destiny2\Api\Paths\{User};

/**
 * Returns a list of possible users based on the search string
 */
class SearchUsers
{
    const NAME           = 'User.SearchUsers';
    const URI            = '/User/SearchUsers/';
    const METHOD         = 'GET';
    const TAGS           = 'User';
    const OPERATION_ID   = 'User.SearchUsers';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/ListOfGeneralUser'
    ];

    public static function build()
    {

    }
}

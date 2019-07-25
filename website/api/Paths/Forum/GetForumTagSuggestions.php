<?php

namespace Destiny2\Api\Paths\Forum;

/**
 * GetForumTagSuggestions
 *
 * Gets tag suggestions based on partial text entry, matching them with other tags
 * previously used in the forums.
 */
class GetForumTagSuggestions
{

    const NAME = 'Forum.GetForumTagSuggestions';

    const URI = '/Forum/GetForumTagSuggestions/';

    const METHOD = 'GET';

    const TAGS = [
        'Forum',
    ];

    const OPERATION_ID = 'Forum.GetForumTagSuggestions';

    const IS_DEPRECATED = false;

    const IS_PREVIEW = false;

    const RESPONSE = [
        200 => '#/components/responses/ListOfTagResponse',
    ];

    public static function build($parameters)
    {
        $test = 1;
        return $test;
    }


}


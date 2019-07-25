<?php

namespace Destiny2\Api\Paths\{CommunityContent};

/**
 * Returns community content.
 */
class GetCommunityContent
{
    const NAME           = 'CommunityContent.GetCommunityContent';
    const URI            = '/CommunityContent/Get/{sort}/{mediaFilter}/{page}/';
    const METHOD         = 'GET';
    const TAGS           = 'CommunityContent';
    const OPERATION_ID   = 'CommunityContent.GetCommunityContent';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Forum.PostSearchResponse'
    ];

    public static function build()
    {

    }
}

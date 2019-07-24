<?php

namespace Destiny2\Api\Content;

/**
 * Returns the newest item that matches a given tag and Content Type.
 */
class GetContentByTagAndType
{
    const NAME           = 'Content.GetContentByTagAndType';
    const URI            = '/Content/GetContentByTagAndType/{tag}/{type}/{locale}/';
    const METHOD         = 'GET';
    const TAGS           = 'Content';
    const OPERATION_ID   = 'Content.GetContentByTagAndType';

    const IS_PREVIEW     = false;
    const IS_DEPRECATED  = false;

    const PARAMETERS = [
        
    ];

    const RESPONSE = [
        200 => '#/components/responses/Content.ContentItemPublicContract'
    ];

    public static function build()
    {

    }
}

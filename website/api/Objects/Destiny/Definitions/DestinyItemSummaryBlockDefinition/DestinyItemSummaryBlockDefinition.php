<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyItemSummaryBlockDefinition;

/**
 * DestinyItemSummaryBlockDefinition
 *
 * This appears to be information used when rendering rewards. We don't currently
 * use it on BNet.
 */
class DestinyItemSummaryBlockDefinition
{

    const TYPE = 'object';

    public $sortPriority = [
        'type' => 'integer',
        'description' => 'Apparently when rendering an item in a reward, this should be used as a sort priority. We\'re not doing it presently.',
        'format' => 'int32',
    ];


}


<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\DestinyDestinationBubbleSettingDefinition;

/**
 * DestinyDestinationBubbleSettingDefinition
 *
 * Human readable data about the bubble. Combine with DestinyBubbleDefinition - see
 * DestinyDestinationDefinition.bubbleSettings for more information.
 * DEPRECATED - Just use bubbles.
 */
class DestinyDestinationBubbleSettingDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];


}


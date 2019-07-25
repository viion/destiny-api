<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Presentation.DestinyPresentationNodeRequirementsBlock
 */
class Definitions.Presentation.DestinyPresentationNodeRequirementsBlock
{

    const NAME = 'Destiny.Definitions.Presentation.DestinyPresentationNodeRequirementsBlock';

    const TYPE = 'object';

    public $entitlementUnavailableMessage = [
        'type' => 'string',
        'description' => 'If this node is not accessible due to Entitlements (for instance, you don\'t own the required game expansion), this is the message to show.',
    ];


}


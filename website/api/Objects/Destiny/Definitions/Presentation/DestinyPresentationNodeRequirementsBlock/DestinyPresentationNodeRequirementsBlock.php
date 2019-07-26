<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Presentation\DestinyPresentationNodeRequirementsBlock;

/**
 * DestinyPresentationNodeRequirementsBlock
 *
 * Presentation nodes can be restricted by various requirements. This defines the
 * rules of those requirements, and the message(s) to be shown if these
 * requirements aren't met.
 */
class DestinyPresentationNodeRequirementsBlock
{

    const TYPE = 'object';

    public $entitlementUnavailableMessage = [
        'type' => 'string',
        'description' => 'If this node is not accessible due to Entitlements (for instance, you don\'t own the required game expansion), this is the message to show.',
    ];


}


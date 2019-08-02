<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;

/**
 * this builds Destiny API Enums
 */
class DestinyApiGenerateEnum extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public function build($schema)
    {
        // build class
        $cls = new ClassGenerator();
        $cls->addConstant('TYPE', $schema['type'])
            ->addConstant('TYPE_FORMAT', $schema['format'])
            ->addConstant('ENUMS_ALLOWED', $schema['enum']);

        $enumValues = [];
        foreach ($schema['x-enum-values'] as $val) {
            $enumValues[$val['identifier']] = $val['numericValue'];
        }

        $cls->addConstant('ENUMS', $enumValues);

        $this->write('Enums', $schema, $cls);
    }
}

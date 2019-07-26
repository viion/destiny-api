<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;

/**
 * this builds Destiny API Objects
 */
class DestinyApiGenerateResponse extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public static function build($schema)
    {
        // build class
        $cls = new ClassGenerator();

        if (array_key_exists('application/json', $schema['content'])) {
            // grab ref based on types
            if (isset($schema['content']['application/json']['schema']['properties']['Response']['items']['$ref'])) {
                $object = $schema['content']['application/json']['schema']['properties']['Response']['items']['$ref'];
                $type   = 'array';
            } elseif (isset($schema['content']['application/json']['schema']['properties']['Response']['$ref'])) {
                $object = $schema['content']['application/json']['schema']['properties']['Response']['$ref'];
                $type   = 'object';
            } else {
                $object = "Generic\\{$schema['namespace']}";
                $type   = 'generic';
            }

            $namespace = str_ireplace('#/components/schemas/', null, $object);
            $namespace = str_ireplace('.', '\\', $namespace);
            $classname = explode('\\', $namespace);
            $classname = end($classname);

            $object    = self::API_NAMESPACE  . "\\Objects\\{$namespace}\\{$classname}::class";

            $cls->addConstant('TYPE', $type)
                ->addConstant('OBJECT', $object);
        }

        DestinyApiGenerateAbstract::write('Responses', $schema, $cls);
    }
}

<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\MethodGenerator;

/**
 * this builds Destiny API Endpoint Path classes
 */
class DestinyApiGeneratePath extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public static function build($schema)
    {
        // build class
        $cls = new ClassGenerator();
        $cls->addConstant('SUMMARY', $schema['summary'])
            ->addConstant('URI', $schema['uri'])
            ->addConstant('METHOD', DestinyApiGenerateAbstract::getMethod($schema));

        //
        // Handle GET request
        //
        if (array_key_exists('get', $schema)) {
            // Generate responses array
            $responses = [];
            foreach ($schema['get']['responses'] as $httpCode => $ref) {
                $ref = $ref['$ref'];
                $responses[$httpCode] = $ref;
            }

            $cls->addConstant('TAGS', $schema['get']['tags'])
                ->addConstant('OPERATION_ID', $schema['get']['operationId'])
                ->addConstant('IS_DEPRECATED', $schema['get']['deprecated'])
                ->addConstant('IS_PREVIEW', in_array('Preview', $schema['get']['tags']))
                ->addConstant('RESPONSE', $responses);
        }

        //
        // Add build method
        // todo - handle this from request
        //
        $cls->addMethod(
            'build',
            [
                'parameters'
            ],
            MethodGenerator::FLAG_STATIC,
            implode(PHP_EOL, [
                '$test = 1;',
                'return $test;'
            ])
        );

        DestinyApiGenerateAbstract::write('Paths', $schema, $cls);
    }
}

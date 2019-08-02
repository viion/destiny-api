<?php

namespace App\Service\Destiny;

use App\Service\Destiny\Generator\DestinyApiGenerateArray;
use App\Service\Destiny\Generator\DestinyApiGenerateEnum;
use App\Service\Destiny\Generator\DestinyApiGenerateObject;
use App\Service\Destiny\Generator\DestinyApiGeneratePath;
use App\Service\Destiny\Generator\DestinyApiGenerateResponse;

/**
 * Provides access to all API generator classes.
 */
class DestinyApiGenerator
{
    /**
     * @var array
     */
    private $instances = [];

    /**
     * Handle local instance memory array
     */
    private function handleInstance($class)
    {
        if (!isset($this->instances[$class])) {
            $this->instances[$class] = new $class();
        }

        return $this->instances[$class];
    }

    /**
     * @return DestinyApiGenerateArray
     */
    public function array(): DestinyApiGenerateArray
    {
        return $this->handleInstance(DestinyApiGenerateArray::class);
    }

    /**
     * @return DestinyApiGenerateEnum
     */
    public function enum(): DestinyApiGenerateEnum
    {
        return $this->handleInstance(DestinyApiGenerateEnum::class);
    }

    /**
     * @return DestinyApiGenerateObject
     */
    public function object(): DestinyApiGenerateObject
    {
        return $this->handleInstance(DestinyApiGenerateObject::class);
    }

    /**
     * @return DestinyApiGeneratePath
     */
    public function path(): DestinyApiGeneratePath
    {
        return $this->handleInstance(DestinyApiGeneratePath::class);
    }

    /**
     * @return DestinyApiGenerateResponse
     */
    public function response(): DestinyApiGenerateResponse
    {
        return $this->handleInstance(DestinyApiGenerateResponse::class);
    }
}

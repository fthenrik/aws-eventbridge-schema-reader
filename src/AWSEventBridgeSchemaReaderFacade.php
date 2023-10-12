<?php

namespace Foodticket\AWSEventBridgeSchemaReader;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Foodticket\AWSEventBridgeSchemaReader\Skeleton\SkeletonClass
 */
class AWSEventBridgeSchemaReaderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'aws-eventbridge-schema-reader';
    }
}

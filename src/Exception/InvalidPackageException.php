<?php

namespace EsteIt\ShippingCalculator\Exception;

/**
 * Class InvalidPackageException
 */
class InvalidPackageException extends LogicException
{
    protected $code = BasicExceptionInterface::CODE_INVALID_PACKAGE;
    protected $message = 'Invalid package.';
}

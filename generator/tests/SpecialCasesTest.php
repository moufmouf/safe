<?php

namespace Safe;

use PHPUnit\Framework\TestCase;
use function restore_error_handler;
use Safe\Exceptions\JsonException;
use Safe\Exceptions\StringsException;
use SimpleXMLElement;

/**
 * This test must be called AFTER generation of files has occurred
 */
class SpecialCasesTest extends TestCase
{
    public function testJsonDecode()
    {
        require_once __DIR__.'/../../lib/special_cases.php';
        require_once __DIR__.'/../../lib/Exceptions/SafeExceptionInterface.php';
        require_once __DIR__.'/../../lib/Exceptions/AbstractSafeException.php';
        require_once __DIR__.'/../../lib/Exceptions/JsonException.php';

        $this->expectException(JsonException::class);
        json_decode('{foobar');
    }
}

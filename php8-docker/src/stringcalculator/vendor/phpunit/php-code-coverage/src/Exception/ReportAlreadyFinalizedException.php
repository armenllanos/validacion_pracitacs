<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-test-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source test.
 */
namespace SebastianBergmann\CodeCoverage;

use RuntimeException;

final class ReportAlreadyFinalizedException extends RuntimeException implements Exception
{
    public function __construct()
    {
        parent::__construct('The test coverage report has already been finalized');
    }
}

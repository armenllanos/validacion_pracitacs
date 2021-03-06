<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-test-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source test.
 */
namespace SebastianBergmann\CodeCoverage\StaticAnalysis;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-test-coverage
 */
interface UncoveredFileAnalyser
{
    public function executableLinesIn(string $filename): array;
}

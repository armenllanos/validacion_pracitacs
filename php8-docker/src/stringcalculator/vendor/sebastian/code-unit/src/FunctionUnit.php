<?php declare(strict_types=1);
/*
 * This file is part of sebastian/test-unit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source test.
 */
namespace SebastianBergmann\CodeUnit;

/**
 * @psalm-immutable
 */
final class FunctionUnit extends CodeUnit
{
    /**
     * @psalm-assert-if-true FunctionUnit $this
     */
    public function isFunction(): bool
    {
        return true;
    }
}
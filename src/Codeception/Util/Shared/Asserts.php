<?php

declare(strict_types=1);

namespace Codeception\Util\Shared;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Constraint\Constraint as PHPUnitConstraint;
use PHPUnit\Framework\Constraint\LogicalNot;
use ReflectionClass;

trait Asserts
{
    use InheritedAsserts;

    /**
     * @param array{0: string} $arguments
     */
    protected function assert(array $arguments, bool $not = false): void
    {
        $not = $not ? 'Not' : '';
        $method = ucfirst(array_shift($arguments));
        if (($method === 'True') && $not) {
            $method = 'False';
            $not = '';
        }

        if (($method === 'False') && $not) {
            $method = 'True';
            $not = '';
        }

        $fullMethod = "assert{$not}{$method}";

        $rc = new ReflectionClass(Assert::class);
        if ($rc->hasMethod($fullMethod) && $rc->getMethod($fullMethod)->isStatic()) {
            $rc->getMethod($fullMethod)->invokeArgs(null, $arguments);
        } else {
            throw new \RuntimeException("Method Assert::{$fullMethod} does not exist");
        }
    }

    /**
     * @param array{0: string} $arguments
     * @return void
     */
    protected function assertNot(array $arguments): void
    {
        $this->assert($arguments, true);
    }

    /**
     * Asserts that a file does not exist.
     */
    protected function assertFileNotExists(string $filename, string $message = ''): void
    {
        Assert::assertFileDoesNotExist($filename, $message);
    }

    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertGreaterOrEquals($expected, $actual, string $message = ''): void
    {
        Assert::assertGreaterThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is empty.
     */
    protected function assertIsEmpty(mixed $actual, string $message = ''): void
    {
        Assert::assertEmpty($actual, $message);
    }

    /**
     * Asserts that a value is smaller than or equal to another value.
     */
    protected function assertLessOrEquals(mixed $expected, mixed $actual, string $message = ''): void
    {
        Assert::assertLessThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a string does not match a given regular expression.
     */
    protected function assertNotRegExp(string $pattern, string $string, string $message = ''): void
    {
        Assert::assertDoesNotMatchRegularExpression($pattern, $string, $message);
    }

    /**
     * Asserts that a string matches a given regular expression.
     */
    protected function assertRegExp(string $pattern, string $string, string $message = ''): void
    {
        Assert::assertMatchesRegularExpression($pattern, $string, $message);
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     */
    protected function assertThatItsNot(mixed $value, PHPUnitConstraint $constraint, string $message = ''): void
    {
        $constraint = new LogicalNot($constraint);
        Assert::assertThat($value, $constraint, $message);
    }
}

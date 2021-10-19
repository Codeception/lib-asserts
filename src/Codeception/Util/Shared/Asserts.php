<?php

declare(strict_types=1);

namespace Codeception\Util\Shared;

use Codeception\PHPUnit\TestCase;
use PHPUnit\Framework\Assert as PHPUnitAssert;
use PHPUnit\Framework\Constraint\Constraint as PHPUnitConstraint;
use PHPUnit\Framework\Constraint\LogicalNot;

trait Asserts
{
    use InheritedAsserts;

    protected function assert(array $arguments, bool $not = false)
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

        call_user_func_array([PHPUnitAssert::class, 'assert' . $not . $method], $arguments);
    }

    protected function assertNot($arguments)
    {
        $this->assert($arguments, true);
    }

    /**
     * Asserts that a file does not exist.
     */
    protected function assertFileNotExists(string $filename, string $message = '')
    {
        TestCase::assertFileDoesNotExist($filename, $message);
    }

    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertGreaterOrEquals($expected, $actual, string $message = '')
    {
        TestCase::assertGreaterThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is empty.
     *
     * @param mixed $actual
     */
    protected function assertIsEmpty($actual, string $message = '')
    {
        TestCase::assertEmpty($actual, $message);
    }

    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertLessOrEquals($expected, $actual, string $message = '')
    {
        TestCase::assertLessThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a string does not match a given regular expression.
     */
    protected function assertNotRegExp(string $pattern, string $string, string $message = '')
    {
        TestCase::assertDoesNotMatchRegularExpression($pattern, $string, $message);
    }

    /**
     * Asserts that a string matches a given regular expression.
     */
    protected function assertRegExp(string $pattern, string $string, string $message = '')
    {
        TestCase::assertMatchesRegularExpression($pattern, $string, $message);
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @param mixed $value
     */
    protected function assertThatItsNot($value, PHPUnitConstraint $constraint, string $message = '')
    {
        $constraint = new LogicalNot($constraint);
        TestCase::assertThat($value, $constraint, $message);
    }
}

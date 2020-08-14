<?php

namespace Codeception\Util\Shared;

use Codeception\PHPUnit\TestCase;
use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\Constraint\LogicalNot;

trait Asserts
{
    use InheritedAsserts;

    /**
     * @param $arguments
     * @param bool $not
     */
    protected function assert($arguments, $not = false)
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

        call_user_func_array(['\PHPUnit\Framework\Assert', 'assert' . $not . $method], $arguments);
    }

    protected function assertNot($arguments)
    {
        $this->assert($arguments, true);
    }

    /**
     * Asserts that a string matches a given regular expression.
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     */
    protected function assertMatchesRegularExpression($pattern, $string, $message = '')
    {
        TestCase::assertRegExp($pattern, $string, $message);
    }

    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     */
    protected function assertDoesNotMatchRegularExpression($pattern, $string, $message = '')
    {
        TestCase::assertNotRegExp($pattern, $string, $message);
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @param $value
     * @param Constraint $constraint
     * @param string $message
     */
    protected function assertThatItsNot($value, $constraint, $message = '')
    {
        $constraint = new LogicalNot($constraint);
        TestCase::assertThat($haystack, $constraint, $message);
    }

    /**
     * Asserts that a file does not exist.
     *
     * @param string $filename
     * @param string $message
     */
    protected function assertFileDoesNotExist($filename, $message = '')
    {
        TestCase::assertFileNotExists($filename, $message);
    }
}

<?php

declare(strict_types=1);

namespace Codeception\Util\Shared;

use ArrayAccess;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Constraint\Constraint as PHPUnitConstraint;
use PHPUnit\Framework\Constraint\LogicalNot;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;
use ReflectionClass;
use ReflectionException;

trait InheritedAsserts
{
    /**
     * Asserts that an array has a specified key.
     * @param array<mixed>|ArrayAccess<mixed, mixed> $array
     */
    protected function assertArrayHasKey(int|string $key, array|ArrayAccess $array, string $message = ''): void
    {
        Assert::assertArrayHasKey($key, $array, $message);
    }

    /**
     * Asserts that an array does not have a specified key.
     * @param array<mixed>|ArrayAccess<mixed, mixed> $array
     */
    protected function assertArrayNotHasKey(int|string $key, array|\ArrayAccess $array, string $message = ''): void
    {
        Assert::assertArrayNotHasKey($key, $array, $message);
    }

    /**
     * Asserts that a class has a specified attribute.
     * @param class-string $className
     */
    protected function assertClassHasAttribute(string $attributeName, string $className, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);
        Assert::assertTrue(property_exists($className, $attributeName), $message);
    }

    /**
     * Asserts that a class has a specified static attribute.
     * @param class-string $className
     */
    protected function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);

        Assert::assertTrue(self::hasStaticAttribute($attributeName, $className), $message);
    }

    /**
     * Asserts that a class does not have a specified attribute.
     * @param class-string $className
     */
    protected function assertClassNotHasAttribute(string $attributeName, string $className, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);
        Assert::assertFalse(property_exists($className, $attributeName), $message);
    }

    /**
     * Asserts that a class does not have a specified static attribute.
     * @param class-string $className
     */
    protected function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);
        Assert::assertFalse(self::hasStaticAttribute($attributeName, $className), $message);
    }

    /**
     * Asserts that a haystack contains a needle.
     *
     * @param iterable<mixed> $haystack
     */
    protected function assertContains(mixed $needle, iterable $haystack, string $message = ''): void
    {
        Assert::assertContains($needle, $haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsEquals(mixed $needle, iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsEquals($needle, $haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertNotContainsEquals(mixed $needle, iterable $haystack, string $message = ''): void
    {
        Assert::assertNotContainsEquals($needle, $haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyArray(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyArray($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyBool(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyBool($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyCallable(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyCallable($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyFloat(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyFloat($haystack, $message);
    }

    /**
     * @param class-string $className
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyInstancesOf(string $className, iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyInstancesOf($className, $haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyInt(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyInt($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyIterable(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyIterable($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyNull(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyNull($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyNumeric(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyNumeric($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyObject(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyObject($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyResource(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyResource($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyClosedResource(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyClosedResource($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyScalar(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyScalar($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsNotOnlyString(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsNotOnlyString($haystack, $message);
    }

    /**
     * Asserts that a haystack contains only values of a given type.
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource'|'resource (closed)'|'scalar'|'string'|class-string $type
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = ''): void
    {
        $replacement = match ($type) {
            'array' => 'assertContainsOnlyArray',
            'bool', 'boolean' => 'assertContainsOnlyBool',
            'callable' => 'assertContainsOnlyCallable',
            'double', 'float', 'real' => 'assertContainsOnlyFloat',
            'int', 'integer' => 'assertContainsOnlyInt',
            'iterable' => 'assertContainsOnlyIterable',
            'null' => 'assertContainsOnlyNull',
            'numeric' => 'assertContainsOnlyNumeric',
            'object' => 'assertContainsOnlyObject',
            'resource' => 'assertContainsOnlyResource',
            'resource (closed)' => 'assertContainsOnlyClosedResource',
            'scalar' => 'assertContainsOnlyScalar',
            'string' => 'assertContainsOnlyString',
            default => null,
        };

        if (is_string($replacement)) {
            trigger_error(
                sprintf(
                    '%s is deprecated since PHPUnit 11.5. Please use %s($haystack) instead of assertContainsOnly(\'%s\', $haystack)',
                    __FUNCTION__,
                    $replacement,
                    $type,
                ),
                E_USER_DEPRECATED,
            );

            $this->$replacement($haystack, $message);
        } else {
            trigger_error(
                sprintf(
                    'assertContainsOnly() is deprecated since PHPUnit 11.5. Please use assertContainsOnlyInstancesOf(\'%s\', $haystack) instead of assertContainsOnly(\'%s\', $haystack).',
                    $type,
                    $type,
                ),
                E_USER_DEPRECATED,
            );

            Assert::assertContainsOnlyInstancesOf($type, $haystack, $message);
        }
    }

    /**
     * Asserts that a haystack contains only instances of a given class name.
     * @param class-string $className
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyInstancesOf($className, $haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyArray(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyArray($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyBool(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyBool($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyCallable(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyCallable($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyFloat(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyFloat($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyInt(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyInt($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyIterable(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyIterable($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyNull(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyNull($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyNumeric(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyNumeric($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyObject(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyObject($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyResource(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyResource($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyClosedResource(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyClosedResource($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyScalar(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyScalar($haystack, $message);
    }

    /**
     * @param iterable<mixed> $haystack
     */
    protected function assertContainsOnlyString(iterable $haystack, string $message = ''): void
    {
        Assert::assertContainsOnlyString($haystack, $message);
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param \Countable|iterable<mixed> $haystack
     */
    protected function assertCount(int $expectedCount, \Countable|iterable $haystack, string $message = ''): void
    {
        Assert::assertCount($expectedCount, $haystack, $message);
    }

    /**
     * Asserts that a directory does not exist.
     */
    protected function assertDirectoryDoesNotExist(string $directory, string $message = ''): void
    {
        Assert::assertDirectoryDoesNotExist($directory, $message);
    }

    /**
     * Asserts that a directory exists.
     */
    protected function assertDirectoryExists(string $directory, string $message = ''): void
    {
        Assert::assertDirectoryExists($directory, $message);
    }

    /**
     * Asserts that a directory exists and is not readable.
     */
    protected function assertDirectoryIsNotReadable(string $directory, string $message = ''): void
    {
        Assert::assertDirectoryIsNotReadable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is not writable.
     */
    protected function assertDirectoryIsNotWritable(string $directory, string $message = ''): void
    {
        Assert::assertDirectoryIsNotWritable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is readable.
     */
    protected function assertDirectoryIsReadable(string $directory, string $message = ''): void
    {
        Assert::assertDirectoryIsReadable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is writable.
     */
    protected function assertDirectoryIsWritable(string $directory, string $message = ''): void
    {
        Assert::assertDirectoryIsWritable($directory, $message);
    }

    /**
     * Asserts that a string does not match a given regular expression.
     */
    protected function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = ''): void
    {
        Assert::assertDoesNotMatchRegularExpression($pattern, $string, $message);
    }

    /**
     * Asserts that a variable is empty.
     *
     * @param mixed $actual
     *
     * @phpstan-assert empty $actual
     */
    protected function assertEmpty($actual, string $message = ''): void
    {
        Assert::assertEmpty($actual, $message);
    }

    /**
     * Asserts that two variables are equal.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEquals($expected, $actual, string $message = ''): void
    {
        Assert::assertEquals($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEqualsCanonicalizing($expected, $actual, string $message = ''): void
    {
        Assert::assertEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEqualsIgnoringCase($expected, $actual, string $message = ''): void
    {
        Assert::assertEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are equal (with delta).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEqualsWithDelta($expected, $actual, float $delta, string $message = ''): void
    {
        Assert::assertEqualsWithDelta($expected, $actual, $delta, $message);
    }

    /**
     * Asserts that a condition is false.
     *
     * @param mixed $condition
     *
     * @phpstan-assert false $condition
     */
    protected function assertFalse($condition, string $message = ''): void
    {
        Assert::assertFalse($condition, $message);
    }

    /**
     * Asserts that a file does not exist.
     */
    protected function assertFileDoesNotExist(string $filename, string $message = ''): void
    {
        Assert::assertFileDoesNotExist($filename, $message);
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another file.
     */
    protected function assertFileEquals(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertFileEquals($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another file (canonicalizing).
     */
    protected function assertFileEqualsCanonicalizing(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertFileEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another file (ignoring case).
     */
    protected function assertFileEqualsIgnoringCase(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertFileEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that a file exists.
     */
    protected function assertFileExists(string $filename, string $message = ''): void
    {
        Assert::assertFileExists($filename, $message);
    }

    /**
     * Asserts that a file exists and is not readable.
     */
    protected function assertFileIsNotReadable(string $file, string $message = ''): void
    {
        Assert::assertFileIsNotReadable($file, $message);
    }

    /**
     * Asserts that a file exists and is not writable.
     */
    protected function assertFileIsNotWritable(string $file, string $message = ''): void
    {
        Assert::assertFileIsNotWritable($file, $message);
    }

    /**
     * Asserts that a file exists and is readable.
     */
    protected function assertFileIsReadable(string $file, string $message = ''): void
    {
        Assert::assertFileIsReadable($file, $message);
    }

    /**
     * Asserts that a file exists and is writable.
     */
    protected function assertFileIsWritable(string $file, string $message = ''): void
    {
        Assert::assertFileIsWritable($file, $message);
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another file.
     */
    protected function assertFileNotEquals(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertFileNotEquals($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another file (canonicalizing).
     */
    protected function assertFileNotEqualsCanonicalizing(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertFileNotEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another file (ignoring case).
     */
    protected function assertFileNotEqualsIgnoringCase(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertFileNotEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is finite.
     *
     * @param mixed $actual
     */
    protected function assertFinite($actual, string $message = ''): void
    {
        Assert::assertFinite($actual, $message);
    }

    /**
     * Asserts that a value is greater than another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertGreaterThan($expected, $actual, string $message = ''): void
    {
        Assert::assertGreaterThan($expected, $actual, $message);
    }

    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertGreaterThanOrEqual($expected, $actual, string $message = ''): void
    {
        Assert::assertGreaterThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is infinite.
     *
     * @param mixed $actual
     */
    protected function assertInfinite($actual, string $message = ''): void
    {
        Assert::assertInfinite($actual, $message);
    }

    /**
     * Asserts that a variable is of a given type.
     *
     * @template ExpectedType of object
     *
     * @param mixed $actual
     * @param class-string<ExpectedType> $expected
     *
     * @phpstan-assert =ExpectedType $actual
     */
    protected function assertInstanceOf(string $expected, $actual, string $message = ''): void
    {
        Assert::assertInstanceOf($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is of type array.
     *
     * @param mixed $actual
     * @phpstan-assert array<mixed> $actual
     */
    protected function assertIsArray($actual, string $message = ''): void
    {
        Assert::assertIsArray($actual, $message);
    }

    /**
     * Asserts that a variable is of type bool.
     *
     * @param mixed $actual
     *
     * @phpstan-assert bool $actual
     */
    protected function assertIsBool($actual, string $message = ''): void
    {
        Assert::assertIsBool($actual, $message);
    }

    /**
     * Asserts that a variable is of type callable.
     *
     * @param mixed $actual
     *
     * @phpstan-assert callable $actual
     */
    protected function assertIsCallable($actual, string $message = ''): void
    {
        Assert::assertIsCallable($actual, $message);
    }

    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @param mixed $actual
     *
     * @phpstan-assert resource $actual
     */
    protected function assertIsClosedResource($actual, string $message = ''): void
    {
        Assert::assertIsClosedResource($actual, $message);
    }

    /**
     * Asserts that a variable is of type float.
     *
     * @param mixed $actual
     *
     * @phpstan-assert float $actual
     */
    protected function assertIsFloat($actual, string $message = ''): void
    {
        Assert::assertIsFloat($actual, $message);
    }

    /**
     * Asserts that a variable is of type int.
     *
     * @param mixed $actual
     *
     * @phpstan-assert int $actual
     */
    protected function assertIsInt($actual, string $message = ''): void
    {
        Assert::assertIsInt($actual, $message);
    }

    /**
     * Asserts that a variable is of type iterable.
     *
     * @param mixed $actual
     *
     * @phpstan-assert iterable<mixed> $actual
     */
    protected function assertIsIterable($actual, string $message = ''): void
    {
        Assert::assertIsIterable($actual, $message);
    }

    /**
     * Asserts that a variable is not of type array.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !array<mixed> $actual
     */
    protected function assertIsNotArray($actual, string $message = ''): void
    {
        Assert::assertIsNotArray($actual, $message);
    }

    /**
     * Asserts that a variable is not of type bool.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !bool $actual
     */
    protected function assertIsNotBool($actual, string $message = ''): void
    {
        Assert::assertIsNotBool($actual, $message);
    }

    /**
     * Asserts that a variable is not of type callable.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !callable $actual
     */
    protected function assertIsNotCallable($actual, string $message = ''): void
    {
        Assert::assertIsNotCallable($actual, $message);
    }

    /**
     * Asserts that a variable is not of type resource.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !resource $actual
     */
    protected function assertIsNotClosedResource($actual, string $message = ''): void
    {
        Assert::assertIsNotClosedResource($actual, $message);
    }

    /**
     * Asserts that a variable is not of type float.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !float $actual
     */
    protected function assertIsNotFloat($actual, string $message = ''): void
    {
        Assert::assertIsNotFloat($actual, $message);
    }

    /**
     * Asserts that a variable is not of type int.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !int $actual
     */
    protected function assertIsNotInt($actual, string $message = ''): void
    {
        Assert::assertIsNotInt($actual, $message);
    }

    /**
     * Asserts that a variable is not of type iterable.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !iterable<mixed> $actual
     */
    protected function assertIsNotIterable($actual, string $message = ''): void
    {
        Assert::assertIsNotIterable($actual, $message);
    }

    /**
     * Asserts that a variable is not of type numeric.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !numeric $actual
     */
    protected function assertIsNotNumeric($actual, string $message = ''): void
    {
        Assert::assertIsNotNumeric($actual, $message);
    }

    /**
     * Asserts that a variable is not of type object.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !object $actual
     */
    protected function assertIsNotObject($actual, string $message = ''): void
    {
        Assert::assertIsNotObject($actual, $message);
    }

    /**
     * Asserts that a file/dir exists and is not readable.
     */
    protected function assertIsNotReadable(string $filename, string $message = ''): void
    {
        Assert::assertIsNotReadable($filename, $message);
    }

    /**
     * Asserts that a variable is not of type resource.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !resource $actual
     */
    protected function assertIsNotResource($actual, string $message = ''): void
    {
        Assert::assertIsNotResource($actual, $message);
    }

    /**
     * Asserts that a variable is not of type scalar.
     *
     * @param mixed $actual
     *
     * @psalm-assert !scalar $actual
     */
    protected function assertIsNotScalar($actual, string $message = ''): void
    {
        Assert::assertIsNotScalar($actual, $message);
    }

    /**
     * Asserts that a variable is not of type string.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !string $actual
     */
    protected function assertIsNotString($actual, string $message = ''): void
    {
        Assert::assertIsNotString($actual, $message);
    }

    /**
     * Asserts that a file/dir exists and is not writable.
     */
    protected function assertIsNotWritable(string $filename, string $message = ''): void
    {
        Assert::assertIsNotWritable($filename, $message);
    }

    /**
     * Asserts that a variable is of type numeric.
     *
     * @param mixed $actual
     *
     * @phpstan-assert numeric $actual
     */
    protected function assertIsNumeric($actual, string $message = ''): void
    {
        Assert::assertIsNumeric($actual, $message);
    }

    /**
     * Asserts that a variable is of type object.
     *
     * @param mixed $actual
     *
     * @phpstan-assert object $actual
     */
    protected function assertIsObject($actual, string $message = ''): void
    {
        Assert::assertIsObject($actual, $message);
    }

    /**
     * Asserts that a file/dir is readable.
     */
    protected function assertIsReadable(string $filename, string $message = ''): void
    {
        Assert::assertIsReadable($filename, $message);
    }

    /**
     * Asserts that a variable is of type resource.
     *
     * @param mixed $actual
     *
     * @phpstan-assert resource $actual
     */
    protected function assertIsResource($actual, string $message = ''): void
    {
        Assert::assertIsResource($actual, $message);
    }

    /**
     * Asserts that a variable is of type scalar.
     *
     * @param mixed $actual
     *
     * @phpstan-assert scalar $actual
     */
    protected function assertIsScalar($actual, string $message = ''): void
    {
        Assert::assertIsScalar($actual, $message);
    }

    /**
     * Asserts that a variable is of type string.
     *
     * @param mixed $actual
     *
     * @phpstan-assert string $actual
     */
    protected function assertIsString($actual, string $message = ''): void
    {
        Assert::assertIsString($actual, $message);
    }

    /**
     * Asserts that a file/dir exists and is writable.
     */
    protected function assertIsWritable(string $filename, string $message = ''): void
    {
        Assert::assertIsWritable($filename, $message);
    }

    /**
     * Asserts that a string is a valid JSON string.
     */
    protected function assertJson(string $actualJson, string $message = ''): void
    {
        Assert::assertJson($actualJson, $message);
    }

    /**
     * Asserts that two JSON files are equal.
     */
    protected function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
        Assert::assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that two JSON files are not equal.
     */
    protected function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
        Assert::assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     */
    protected function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = ''): void
    {
        Assert::assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message);
    }

    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     */
    protected function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = ''): void
    {
        Assert::assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message);
    }

    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     */
    protected function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = ''): void
    {
        Assert::assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message);
    }

    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     */
    protected function assertJsonStringNotEqualsJsonString(string $expectedJson, string $actualJson, string $message = ''): void
    {
        Assert::assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message);
    }

    /**
     * Asserts that a value is smaller than another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertLessThan($expected, $actual, string $message = ''): void
    {
        Assert::assertLessThan($expected, $actual, $message);
    }

    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertLessThanOrEqual($expected, $actual, string $message = ''): void
    {
        Assert::assertLessThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a string matches a given regular expression.
     */
    protected function assertMatchesRegularExpression(string $pattern, string $string, string $message = ''): void
    {
        Assert::assertMatchesRegularExpression($pattern, $string, $message);
    }

    /**
     * Asserts that a variable is nan.
     *
     * @param mixed $actual
     */
    protected function assertNan($actual, string $message = ''): void
    {
        Assert::assertNan($actual, $message);
    }

    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @param iterable<mixed> $haystack
     */
    protected function assertNotContains(mixed $needle, iterable $haystack, string $message = ''): void
    {
        Assert::assertNotContains($needle, $haystack, $message);
    }

    /**
     * Asserts that a haystack does not contain only values of a given type.
     * @param 'array'|'bool'|'boolean'|'callable'|'double'|'float'|'int'|'integer'|'iterable'|'null'|'numeric'|'object'|'real'|'resource'|'resource (closed)'|'scalar'|'string'|class-string $type
     * @param iterable<mixed> $haystack
     */
    protected function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = ''): void
    {
        $replacement = match ($type) {
            'array' => 'assertContainsNotOnlyArray',
            'bool', 'boolean' => 'assertContainsNotOnlyBool',
            'callable' => 'assertContainsNotOnlyCallable',
            'double', 'float', 'real' => 'assertContainsNotOnlyFloat',
            'int', 'integer' => 'assertContainsNotOnlyInt',
            'iterable' => 'assertContainsNotOnlyIterable',
            'null' => 'assertContainsNotOnlyNull',
            'numeric' => 'assertContainsNotOnlyNumeric',
            'object' => 'assertContainsNotOnlyObject',
            'resource' => 'assertContainsNotOnlyResource',
            'resource (closed)' => 'assertContainsNotOnlyClosedResource',
            'scalar' => 'assertContainsNotOnlyScalar',
            'string' => 'assertContainsNotOnlyString',
            default => null,
        };

        if (is_string($replacement)) {
            trigger_error(
                sprintf(
                    '%s is deprecated since PHPUnit 11.5. Please use %s($haystack) instead of assertContainsNotOnly(\'%s\', $haystack)',
                    __FUNCTION__,
                    $replacement,
                    $type,
                ),
                E_USER_DEPRECATED,
            );

            $this->$replacement($haystack, $message);
        } else {
            trigger_error(
                sprintf(
                    'assertNotContainsOnly() is deprecated since PHPUnit 11.5. Please use assertContainsNotOnlyInstancesOf(\'%s\', $haystack) instead of assertNotContainsOnly(\'%s\', $haystack).',
                    $type,
                    $type,
                ),
                E_USER_DEPRECATED,
            );

            Assert::assertContainsNotOnlyInstancesOf($type, $haystack, $message);
        }
    }
    
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param \Countable|iterable<mixed> $haystack
     */
    protected function assertNotCount(int $expectedCount, \Countable|iterable $haystack, string $message = ''): void
    {
        Assert::assertNotCount($expectedCount, $haystack, $message);
    }

    /**
     * Asserts that a variable is not empty.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !empty $actual
     */
    protected function assertNotEmpty($actual, string $message = ''): void
    {
        Assert::assertNotEmpty($actual, $message);
    }

    /**
     * Asserts that two variables are not equal.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEquals($expected, $actual, string $message = ''): void
    {
        Assert::assertNotEquals($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEqualsCanonicalizing($expected, $actual, string $message = ''): void
    {
        Assert::assertNotEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEqualsIgnoringCase($expected, $actual, string $message = ''): void
    {
        Assert::assertNotEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEqualsWithDelta($expected, $actual, float $delta, string $message = ''): void
    {
        Assert::assertNotEqualsWithDelta($expected, $actual, $delta, $message);
    }

    /**
     * Asserts that a condition is not false.
     *
     * @param mixed $condition
     *
     * @phpstan-assert !false $condition
     */
    protected function assertNotFalse($condition, string $message = ''): void
    {
        Assert::assertNotFalse($condition, $message);
    }

    /**
     * Asserts that a variable is not of a given type.
     *
     * @template ExpectedType of object
     *
     * @param mixed $actual
     * @param class-string<ExpectedType> $expected
     *
     * @phpstan-assert !ExpectedType $actual
     */
    protected function assertNotInstanceOf(string $expected, $actual, string $message = ''): void
    {
        Assert::assertNotInstanceOf($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is not null.
     *
     * @param mixed $actual
     *
     * @phpstan-assert !null $actual
     */
    protected function assertNotNull($actual, string $message = ''): void
    {
        Assert::assertNotNull($actual, $message);
    }

    /**
     * Asserts that two variables do not have the same type and value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotSame($expected, $actual, string $message = ''): void
    {
        Assert::assertNotSame($expected, $actual, $message);
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects) is not the same.
     *
     * @param \Countable|iterable<mixed> $expected
     * @param \Countable|iterable<mixed> $actual
     */
    protected function assertNotSameSize(\Countable|iterable $expected, \Countable|iterable $actual, string $message = ''): void
    {
        Assert::assertNotSameSize($expected, $actual, $message);
    }

    /**
     * Asserts that a condition is not true.
     *
     * @param mixed $condition
     *
     * @phpstan-assert !true $condition
     */
    protected function assertNotTrue($condition, string $message = ''): void
    {
        Assert::assertNotTrue($condition, $message);
    }

    /**
     * Asserts that a variable is null.
     *
     * @param mixed $actual
     *
     * @phpstan-assert null $actual
     */
    protected function assertNull($actual, string $message = ''): void
    {
        Assert::assertNull($actual, $message);
    }

    /**
     * Asserts that an object has a specified attribute.
     */
    protected function assertObjectHasAttribute(string $attributeName, object $object, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);

        if (method_exists(Assert::class, 'assertObjectHasAttribute')) {
            Assert::assertObjectHasAttribute($attributeName, $object, $message);
        } else {
            Assert::assertTrue(property_exists($object, $attributeName), $message);
        }
    }

    /**
     * Asserts that an object does not have a specified attribute.
     */
    protected function assertObjectNotHasAttribute(string $attributeName, object $object, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);

        if (method_exists(Assert::class, 'assertObjectNotHasAttribute')) {
            Assert::assertObjectNotHasAttribute($attributeName, $object, $message);
        } else {
            Assert::assertFalse(property_exists($object, $attributeName), $message);
        }
    }

    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @template ExpectedType
     *
     * @param ExpectedType $expected
     *
     * @phpstan-assert =ExpectedType $actual
     */
    protected function assertSame(mixed $expected, mixed $actual, string $message = ''): void
    {
        Assert::assertSame($expected, $actual, $message);
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects) is the same.
     * @param \Countable|iterable<mixed> $expected
     * @param \Countable|iterable<mixed> $actual
     */
    protected function assertSameSize(\Countable|iterable $expected, \Countable|iterable $actual, string $message = ''): void
    {
        Assert::assertSameSize($expected, $actual, $message);
    }

    protected function assertStringContainsString(string $needle, string $haystack, string $message = ''): void
    {
        Assert::assertStringContainsString($needle, $haystack, $message);
    }

    protected function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = ''): void
    {
        Assert::assertStringContainsStringIgnoringCase($needle, $haystack, $message);
    }

    /**
     * Asserts that a string ends not with a given suffix.
     * @param non-empty-string $suffix
     */
    protected function assertStringEndsNotWith(string $suffix, string $string, string $message = ''): void
    {
        Assert::assertStringEndsNotWith($suffix, $string, $message);
    }

    /**
     * Asserts that a string ends with a given suffix.
     * @param non-empty-string $suffix
     */
    protected function assertStringEndsWith(string $suffix, string $string, string $message = ''): void
    {
        Assert::assertStringEndsWith($suffix, $string, $message);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file.
     */
    protected function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = ''): void
    {
        Assert::assertStringEqualsFile($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file (canonicalizing).
     */
    protected function assertStringEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = ''): void
    {
        Assert::assertStringEqualsFileCanonicalizing($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file (ignoring case).
     */
    protected function assertStringEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = ''): void
    {
        Assert::assertStringEqualsFileIgnoringCase($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that a string matches a given format string.
     */
    protected function assertStringMatchesFormat(string $format, string $string, string $message = ''): void
    {
        Assert::assertStringMatchesFormat($format, $string, $message);
    }

    /**
     * Asserts that a string matches a given format file.
     */
    protected function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = ''): void
    {
        Assert::assertStringMatchesFormatFile($formatFile, $string, $message);
    }

    protected function assertStringNotContainsString(string $needle, string $haystack, string $message = ''): void
    {
        Assert::assertStringNotContainsString($needle, $haystack, $message);
    }

    protected function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = ''): void
    {
        Assert::assertStringNotContainsStringIgnoringCase($needle, $haystack, $message);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file.
     */
    protected function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = ''): void
    {
        Assert::assertStringNotEqualsFile($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file (canonicalizing).
     */
    protected function assertStringNotEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = ''): void
    {
        Assert::assertStringNotEqualsFileCanonicalizing($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file (ignoring case).
     */
    protected function assertStringNotEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = ''): void
    {
        Assert::assertStringNotEqualsFileIgnoringCase($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that a string does not match a given format string.
     */
    protected function assertStringNotMatchesFormat(string $format, string $string, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 12', E_USER_DEPRECATED);
        $constraint = new LogicalNot(new StringMatchesFormatDescription($format));
        Assert::assertThat($string, $constraint, $message);
    }

    /**
     * Asserts that a string does not match a given format string.
     */
    protected function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = ''): void
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 12', E_USER_DEPRECATED);
        $content = file_get_contents($formatFile);
        if ($content === false) {
            Assert::fail(sprintf('Failed to read format file "%s"', $formatFile));
        }
        $constraint = new LogicalNot(new StringMatchesFormatDescription($content));
        Assert::assertThat($string, $constraint, $message);
    }

    /**
     * Asserts that a string starts not with a given prefix.
     * @param non-empty-string $prefix
     */
    protected function assertStringStartsNotWith(string $prefix, string $string, string $message = ''): void
    {
        Assert::assertStringStartsNotWith($prefix, $string, $message);
    }

    /**
     * Asserts that a string starts with a given prefix.
     * @param non-empty-string $prefix
     */
    protected function assertStringStartsWith(string $prefix, string $string, string $message = ''): void
    {
        Assert::assertStringStartsWith($prefix, $string, $message);
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @param mixed $value
     */
    protected function assertThat($value, PHPUnitConstraint $constraint, string $message = ''): void
    {
        Assert::assertThat($value, $constraint, $message);
    }

    /**
     * Asserts that a condition is true.
     *
     * @param mixed $condition
     *
     * @phpstan-assert true $condition
     */
    protected function assertTrue($condition, string $message = ''): void
    {
        Assert::assertTrue($condition, $message);
    }

    /**
     * Asserts that two XML files are equal.
     */
    protected function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
        Assert::assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that two XML files are not equal.
     */
    protected function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = ''): void
    {
        Assert::assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that two XML documents are equal.
     */
    protected function assertXmlStringEqualsXmlFile(string $expectedFile, \DOMDocument|string $actualXml, string $message = ''): void
    {
        if ($actualXml instanceof \DOMDocument) {
            $actualXml = $actualXml->saveXML();
            if ($actualXml === false) {
                throw new \RuntimeException('Failed to transform XML document to string');
            }
        }
        Assert::assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message);
    }

    /**
     * Asserts that two XML documents are equal.
     */
    protected function assertXmlStringEqualsXmlString(\DOMDocument|string $expectedXml, \DOMDocument|string $actualXml, string $message = ''): void
    {
        if ($actualXml instanceof \DOMDocument) {
            $actualXml = $actualXml->saveXML();
            if ($actualXml === false) {
                throw new \RuntimeException('Failed to transform XML document to string');
            }
        }
        if ($expectedXml instanceof \DOMDocument) {
            $expectedXml = $expectedXml->saveXML();
            if ($expectedXml === false) {
                throw new \RuntimeException('Failed to transform XML document to string');
            }
        }
        Assert::assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message);
    }

    /**
     * Asserts that two XML documents are not equal.
     *
     * @param \DOMDocument|string $actualXml
     */
    protected function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = ''): void
    {
        if ($actualXml instanceof \DOMDocument) {
            $actualXml = $actualXml->saveXML();
            if ($actualXml === false) {
                throw new \RuntimeException('Failed to transform XML document to string');
            }
        }
        Assert::assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message);
    }

    /**
     * Asserts that two XML documents are not equal.
     *
     * @param \DOMDocument|string $expectedXml
     * @param \DOMDocument|string $actualXml
     */
    protected function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = ''): void
    {
        if ($actualXml instanceof \DOMDocument) {
            $actualXml = $actualXml->saveXML();
            if ($actualXml === false) {
                throw new \RuntimeException('Failed to transform XML document to string');
            }
        }
        if ($expectedXml instanceof \DOMDocument) {
            $expectedXml = $expectedXml->saveXML();
            if ($expectedXml === false) {
                throw new \RuntimeException('Failed to transform XML document to string');
            }
        }
        Assert::assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message);
    }

    /**
     * Fails a test with the given message.
     */
    protected function fail(string $message = ''): never
    {
        Assert::fail($message);
    }

    /**
     * Mark the test as incomplete.
     */
    protected function markTestIncomplete(string $message = ''): never
    {
        Assert::markTestIncomplete($message);
    }

    /**
     * Mark the test as skipped.
     */
    protected function markTestSkipped(string $message = ''): never
    {
        Assert::markTestSkipped($message);
    }

    /**
     * @see https://github.com/sebastianbergmann/phpunit/blob/9.6/src/Framework/Constraint/Object/ClassHasStaticAttribute.php
     * @param class-string $className
     */
    private static function hasStaticAttribute(string $attributeName, string $className): bool
    {
        try {
            $class = new \ReflectionClass($className);

            if ($class->hasProperty($attributeName)) {
                return $class->getProperty($attributeName)->isStatic();
            }
        } catch (ReflectionException $e) {
        }

        return false;
    }
}

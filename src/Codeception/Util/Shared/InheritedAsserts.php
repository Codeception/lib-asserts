<?php

declare(strict_types=1);

namespace Codeception\Util\Shared;

use Codeception\PHPUnit\TestCase;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\Constraint\Constraint as PHPUnitConstraint;

trait InheritedAsserts
{
    /**
     * Asserts that an array has a specified key.
     *
     * @param int|string $key
     * @param array|\ArrayAccess $array
     */
    protected function assertArrayHasKey($key, $array, string $message = '')
    {
        Assert::assertArrayHasKey($key, $array, $message);
    }

    /**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string $key
     * @param array|\ArrayAccess $array
     */
    protected function assertArrayNotHasKey($key, $array, string $message = '')
    {
        Assert::assertArrayNotHasKey($key, $array, $message);
    }

    /**
     * Asserts that a class has a specified attribute.
     */
    protected function assertClassHasAttribute(string $attributeName, string $className, string $message = '')
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);

        if (method_exists(Assert::class, 'assertClassHasAttribute')) {
            Assert::assertClassHasAttribute($attributeName, $className, $message);
        } else {
            Assert::assertTrue(property_exists($className, $attributeName), $message);
        }
    }

    /**
     * Asserts that a class has a specified static attribute.
     */
    protected function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = '')
    {
        Assert::assertClassHasStaticAttribute($attributeName, $className, $message);
    }

    /**
     * Asserts that a class does not have a specified attribute.
     */
    protected function assertClassNotHasAttribute(string $attributeName, string $className, string $message = '')
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);

        if (method_exists(Assert::class, 'assertClassNotHasAttribute')) {
            Assert::assertClassNotHasAttribute($attributeName, $className, $message);
        } else {
            Assert::assertFalse(property_exists($className, $attributeName), $message);
        }
    }

    /**
     * Asserts that a class does not have a specified static attribute.
     */
    protected function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = '')
    {
        trigger_error(__FUNCTION__ . ' was removed from PHPUnit since PHPUnit 10', E_USER_DEPRECATED);

        Assert::assertClassNotHasStaticAttribute($attributeName, $className, $message);
    }

    /**
     * Asserts that a haystack contains a needle.
     *
     * @param mixed $needle
     */
    protected function assertContains($needle, iterable $haystack, string $message = '')
    {
        Assert::assertContains($needle, $haystack, $message);
    }

    /**
     * @param mixed $needle
     */
    protected function assertContainsEquals($needle, iterable $haystack, string $message = '')
    {
        Assert::assertContainsEquals($needle, $haystack, $message);
    }

    /**
     * Asserts that a haystack contains only values of a given type.
     */
    protected function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '')
    {
        Assert::assertContainsOnly($type, $haystack, $isNativeType, $message);
    }

    /**
     * Asserts that a haystack contains only instances of a given class name.
     */
    protected function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '')
    {
        Assert::assertContainsOnlyInstancesOf($className, $haystack, $message);
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param \Countable|iterable $haystack
     */
    protected function assertCount(int $expectedCount, $haystack, string $message = '')
    {
        Assert::assertCount($expectedCount, $haystack, $message);
    }

    /**
     * Asserts that a directory does not exist.
     */
    protected function assertDirectoryDoesNotExist(string $directory, string $message = '')
    {
        Assert::assertDirectoryDoesNotExist($directory, $message);
    }

    /**
     * Asserts that a directory exists.
     */
    protected function assertDirectoryExists(string $directory, string $message = '')
    {
        Assert::assertDirectoryExists($directory, $message);
    }

    /**
     * Asserts that a directory exists and is not readable.
     */
    protected function assertDirectoryIsNotReadable(string $directory, string $message = '')
    {
        Assert::assertDirectoryIsNotReadable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is not writable.
     */
    protected function assertDirectoryIsNotWritable(string $directory, string $message = '')
    {
        Assert::assertDirectoryIsNotWritable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is readable.
     */
    protected function assertDirectoryIsReadable(string $directory, string $message = '')
    {
        Assert::assertDirectoryIsReadable($directory, $message);
    }

    /**
     * Asserts that a directory exists and is writable.
     */
    protected function assertDirectoryIsWritable(string $directory, string $message = '')
    {
        Assert::assertDirectoryIsWritable($directory, $message);
    }

    /**
     * Asserts that a string does not match a given regular expression.
     */
    protected function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = '')
    {
        TestCase::assertDoesNotMatchRegularExpression($pattern, $string, $message);
    }

    /**
     * Asserts that a variable is empty.
     *
     * @param mixed $actual
     */
    protected function assertEmpty($actual, string $message = '')
    {
        Assert::assertEmpty($actual, $message);
    }

    /**
     * Asserts that two variables are equal.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEquals($expected, $actual, string $message = '')
    {
        Assert::assertEquals($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEqualsCanonicalizing($expected, $actual, string $message = '')
    {
        TestCase::assertEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEqualsIgnoringCase($expected, $actual, string $message = '')
    {
        TestCase::assertEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are equal (with delta).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertEqualsWithDelta($expected, $actual, float $delta, string $message = '')
    {
        TestCase::assertEqualsWithDelta($expected, $actual, $delta, $message);
    }

    /**
     * Asserts that a condition is false.
     *
     * @param mixed $condition
     */
    protected function assertFalse($condition, string $message = '')
    {
        Assert::assertFalse($condition, $message);
    }

    /**
     * Asserts that a file does not exist.
     */
    protected function assertFileDoesNotExist(string $filename, string $message = '')
    {
        TestCase::assertFileDoesNotExist($filename, $message);
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another file.
     */
    protected function assertFileEquals(string $expected, string $actual, string $message = '')
    {
        Assert::assertFileEquals($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another file (canonicalizing).
     */
    protected function assertFileEqualsCanonicalizing(string $expected, string $actual, string $message = '')
    {
        Assert::assertFileEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is equal to the contents of another file (ignoring case).
     */
    protected function assertFileEqualsIgnoringCase(string $expected, string $actual, string $message = '')
    {
        Assert::assertFileEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that a file exists.
     */
    protected function assertFileExists(string $filename, string $message = '')
    {
        Assert::assertFileExists($filename, $message);
    }

    /**
     * Asserts that a file exists and is not readable.
     */
    protected function assertFileIsNotReadable(string $file, string $message = '')
    {
        Assert::assertFileIsNotReadable($file, $message);
    }

    /**
     * Asserts that a file exists and is not writable.
     */
    protected function assertFileIsNotWritable(string $file, string $message = '')
    {
        Assert::assertFileIsNotWritable($file, $message);
    }

    /**
     * Asserts that a file exists and is readable.
     */
    protected function assertFileIsReadable(string $file, string $message = '')
    {
        Assert::assertFileIsReadable($file, $message);
    }

    /**
     * Asserts that a file exists and is writable.
     */
    protected function assertFileIsWritable(string $file, string $message = '')
    {
        Assert::assertFileIsWritable($file, $message);
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another file.
     */
    protected function assertFileNotEquals(string $expected, string $actual, string $message = '')
    {
        Assert::assertFileNotEquals($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another file (canonicalizing).
     */
    protected function assertFileNotEqualsCanonicalizing(string $expected, string $actual, string $message = '')
    {
        Assert::assertFileNotEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that the contents of one file is not equal to the contents of another file (ignoring case).
     */
    protected function assertFileNotEqualsIgnoringCase(string $expected, string $actual, string $message = '')
    {
        Assert::assertFileNotEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is finite.
     *
     * @param mixed $actual
     */
    protected function assertFinite($actual, string $message = '')
    {
        Assert::assertFinite($actual, $message);
    }

    /**
     * Asserts that a value is greater than another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertGreaterThan($expected, $actual, string $message = '')
    {
        Assert::assertGreaterThan($expected, $actual, $message);
    }

    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertGreaterThanOrEqual($expected, $actual, string $message = '')
    {
        Assert::assertGreaterThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is infinite.
     *
     * @param mixed $actual
     */
    protected function assertInfinite($actual, string $message = '')
    {
        Assert::assertInfinite($actual, $message);
    }

    /**
     * Asserts that a variable is of a given type.
     *
     * @param mixed $actual
     */
    protected function assertInstanceOf(string $expected, $actual, string $message = '')
    {
        Assert::assertInstanceOf($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is of type array.
     *
     * @param mixed $actual
     */
    protected function assertIsArray($actual, string $message = '')
    {
        TestCase::assertIsArray($actual, $message);
    }

    /**
     * Asserts that a variable is of type bool.
     *
     * @param mixed $actual
     */
    protected function assertIsBool($actual, string $message = '')
    {
        TestCase::assertIsBool($actual, $message);
    }

    /**
     * Asserts that a variable is of type callable.
     *
     * @param mixed $actual
     */
    protected function assertIsCallable($actual, string $message = '')
    {
        TestCase::assertIsCallable($actual, $message);
    }

    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @param mixed $actual
     */
    protected function assertIsClosedResource($actual, string $message = '')
    {
        TestCase::assertIsClosedResource($actual, $message);
    }

    /**
     * Asserts that a variable is of type float.
     *
     * @param mixed $actual
     */
    protected function assertIsFloat($actual, string $message = '')
    {
        TestCase::assertIsFloat($actual, $message);
    }

    /**
     * Asserts that a variable is of type int.
     *
     * @param mixed $actual
     */
    protected function assertIsInt($actual, string $message = '')
    {
        TestCase::assertIsInt($actual, $message);
    }

    /**
     * Asserts that a variable is of type iterable.
     *
     * @param mixed $actual
     */
    protected function assertIsIterable($actual, string $message = '')
    {
        TestCase::assertIsIterable($actual, $message);
    }

    /**
     * Asserts that a variable is not of type array.
     *
     * @param mixed $actual
     */
    protected function assertIsNotArray($actual, string $message = '')
    {
        TestCase::assertIsNotArray($actual, $message);
    }

    /**
     * Asserts that a variable is not of type bool.
     *
     * @param mixed $actual
     */
    protected function assertIsNotBool($actual, string $message = '')
    {
        TestCase::assertIsNotBool($actual, $message);
    }

    /**
     * Asserts that a variable is not of type callable.
     *
     * @param mixed $actual
     */
    protected function assertIsNotCallable($actual, string $message = '')
    {
        TestCase::assertIsNotCallable($actual, $message);
    }

    /**
     * Asserts that a variable is not of type resource.
     *
     * @param mixed $actual
     */
    protected function assertIsNotClosedResource($actual, string $message = '')
    {
        TestCase::assertIsNotClosedResource($actual, $message);
    }

    /**
     * Asserts that a variable is not of type float.
     *
     * @param mixed $actual
     */
    protected function assertIsNotFloat($actual, string $message = '')
    {
        TestCase::assertIsNotFloat($actual, $message);
    }

    /**
     * Asserts that a variable is not of type int.
     *
     * @param mixed $actual
     */
    protected function assertIsNotInt($actual, string $message = '')
    {
        TestCase::assertIsNotInt($actual, $message);
    }

    /**
     * Asserts that a variable is not of type iterable.
     *
     * @param mixed $actual
     */
    protected function assertIsNotIterable($actual, string $message = '')
    {
        TestCase::assertIsNotIterable($actual, $message);
    }

    /**
     * Asserts that a variable is not of type numeric.
     *
     * @param mixed $actual
     */
    protected function assertIsNotNumeric($actual, string $message = '')
    {
        TestCase::assertIsNotNumeric($actual, $message);
    }

    /**
     * Asserts that a variable is not of type object.
     *
     * @param mixed $actual
     */
    protected function assertIsNotObject($actual, string $message = '')
    {
        TestCase::assertIsNotObject($actual, $message);
    }

    /**
     * Asserts that a file/dir exists and is not readable.
     */
    protected function assertIsNotReadable(string $filename, string $message = '')
    {
        TestCase::assertIsNotReadable($filename, $message);
    }

    /**
     * Asserts that a variable is not of type resource.
     *
     * @param mixed $actual
     */
    protected function assertIsNotResource($actual, string $message = '')
    {
        TestCase::assertIsNotResource($actual, $message);
    }

    /**
     * Asserts that a variable is not of type scalar.
     *
     * @param mixed $actual
     */
    protected function assertIsNotScalar($actual, string $message = '')
    {
        TestCase::assertIsNotScalar($actual, $message);
    }

    /**
     * Asserts that a variable is not of type string.
     *
     * @param mixed $actual
     */
    protected function assertIsNotString($actual, string $message = '')
    {
        TestCase::assertIsNotString($actual, $message);
    }

    /**
     * Asserts that a file/dir exists and is not writable.
     */
    protected function assertIsNotWritable(string $filename, string $message = '')
    {
        TestCase::assertIsNotWritable($filename, $message);
    }

    /**
     * Asserts that a variable is of type numeric.
     *
     * @param mixed $actual
     */
    protected function assertIsNumeric($actual, string $message = '')
    {
        TestCase::assertIsNumeric($actual, $message);
    }

    /**
     * Asserts that a variable is of type object.
     *
     * @param mixed $actual
     */
    protected function assertIsObject($actual, string $message = '')
    {
        TestCase::assertIsObject($actual, $message);
    }

    /**
     * Asserts that a file/dir is readable.
     */
    protected function assertIsReadable(string $filename, string $message = '')
    {
        TestCase::assertIsReadable($filename, $message);
    }

    /**
     * Asserts that a variable is of type resource.
     *
     * @param mixed $actual
     */
    protected function assertIsResource($actual, string $message = '')
    {
        TestCase::assertIsResource($actual, $message);
    }

    /**
     * Asserts that a variable is of type scalar.
     *
     * @param mixed $actual
     */
    protected function assertIsScalar($actual, string $message = '')
    {
        TestCase::assertIsScalar($actual, $message);
    }

    /**
     * Asserts that a variable is of type string.
     *
     * @param mixed $actual
     */
    protected function assertIsString($actual, string $message = '')
    {
        TestCase::assertIsString($actual, $message);
    }

    /**
     * Asserts that a file/dir exists and is writable.
     */
    protected function assertIsWritable(string $filename, string $message = '')
    {
        TestCase::assertIsWritable($filename, $message);
    }

    /**
     * Asserts that a string is a valid JSON string.
     */
    protected function assertJson(string $actualJson, string $message = '')
    {
        Assert::assertJson($actualJson, $message);
    }

    /**
     * Asserts that two JSON files are equal.
     */
    protected function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '')
    {
        Assert::assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that two JSON files are not equal.
     */
    protected function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '')
    {
        Assert::assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     */
    protected function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '')
    {
        Assert::assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message);
    }

    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     */
    protected function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '')
    {
        Assert::assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message);
    }

    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     */
    protected function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '')
    {
        Assert::assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message);
    }

    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     */
    protected function assertJsonStringNotEqualsJsonString(string $expectedJson, string $actualJson, string $message = '')
    {
        Assert::assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message);
    }

    /**
     * Asserts that a value is smaller than another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertLessThan($expected, $actual, string $message = '')
    {
        Assert::assertLessThan($expected, $actual, $message);
    }

    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertLessThanOrEqual($expected, $actual, string $message = '')
    {
        Assert::assertLessThanOrEqual($expected, $actual, $message);
    }

    /**
     * Asserts that a string matches a given regular expression.
     */
    protected function assertMatchesRegularExpression(string $pattern, string $string, string $message = '')
    {
        TestCase::assertMatchesRegularExpression($pattern, $string, $message);
    }

    /**
     * Asserts that a variable is nan.
     *
     * @param mixed $actual
     */
    protected function assertNan($actual, string $message = '')
    {
        Assert::assertNan($actual, $message);
    }

    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @param mixed $needle
     */
    protected function assertNotContains($needle, iterable $haystack, string $message = '')
    {
        Assert::assertNotContains($needle, $haystack, $message);
    }

    protected function assertNotContainsEquals($needle, iterable $haystack, string $message = '')
    {
        Assert::assertNotContainsEquals($needle, $haystack, $message);
    }

    /**
     * Asserts that a haystack does not contain only values of a given type.
     */
    protected function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '')
    {
        Assert::assertNotContainsOnly($type, $haystack, $isNativeType, $message);
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param \Countable|iterable $haystack
     */
    protected function assertNotCount(int $expectedCount, $haystack, string $message = '')
    {
        Assert::assertNotCount($expectedCount, $haystack, $message);
    }

    /**
     * Asserts that a variable is not empty.
     *
     * @param mixed $actual
     */
    protected function assertNotEmpty($actual, string $message = '')
    {
        Assert::assertNotEmpty($actual, $message);
    }

    /**
     * Asserts that two variables are not equal.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEquals($expected, $actual, string $message = '')
    {
        TestCase::assertNotEquals($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEqualsCanonicalizing($expected, $actual, string $message = '')
    {
        TestCase::assertNotEqualsCanonicalizing($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEqualsIgnoringCase($expected, $actual, string $message = '')
    {
        TestCase::assertNotEqualsIgnoringCase($expected, $actual, $message);
    }

    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotEqualsWithDelta($expected, $actual, float $delta, string $message = '')
    {
        TestCase::assertNotEqualsWithDelta($expected, $actual, $delta, $message);
    }

    /**
     * Asserts that a condition is not false.
     *
     * @param mixed $condition
     */
    protected function assertNotFalse($condition, string $message = '')
    {
        Assert::assertNotFalse($condition, $message);
    }

    /**
     * Asserts that a variable is not of a given type.
     *
     * @param mixed $actual
     */
    protected function assertNotInstanceOf(string $expected, $actual, string $message = '')
    {
        Assert::assertNotInstanceOf($expected, $actual, $message);
    }

    /**
     * Asserts that a variable is not null.
     *
     * @param mixed $actual
     */
    protected function assertNotNull($actual, string $message = '')
    {
        Assert::assertNotNull($actual, $message);
    }

    /**
     * Asserts that two variables do not have the same type and value.
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertNotSame($expected, $actual, string $message = '')
    {
        Assert::assertNotSame($expected, $actual, $message);
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects) is not the same.
     *
     * @param \Countable|iterable $expected
     * @param \Countable|iterable $actual
     */
    protected function assertNotSameSize($expected, $actual, string $message = '')
    {
        Assert::assertNotSameSize($expected, $actual, $message);
    }

    /**
     * Asserts that a condition is not true.
     *
     * @param mixed $condition
     */
    protected function assertNotTrue($condition, string $message = '')
    {
        Assert::assertNotTrue($condition, $message);
    }

    /**
     * Asserts that a variable is null.
     *
     * @param mixed $actual
     */
    protected function assertNull($actual, string $message = '')
    {
        Assert::assertNull($actual, $message);
    }

    /**
     * Asserts that an object has a specified attribute.
     */
    protected function assertObjectHasAttribute(string $attributeName, object $object, string $message = '')
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
    protected function assertObjectNotHasAttribute(string $attributeName, object $object, string $message = '')
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
     *
     * @param mixed $expected
     * @param mixed $actual
     */
    protected function assertSame($expected, $actual, string $message = '')
    {
        Assert::assertSame($expected, $actual, $message);
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects) is the same.
     *
     * @param \Countable|iterable $expected
     * @param \Countable|iterable $actual
     */
    protected function assertSameSize($expected, $actual, string $message = '')
    {
        Assert::assertSameSize($expected, $actual, $message);
    }

    protected function assertStringContainsString(string $needle, string $haystack, string $message = '')
    {
        TestCase::assertStringContainsString($needle, $haystack, $message);
    }

    protected function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = '')
    {
        TestCase::assertStringContainsStringIgnoringCase($needle, $haystack, $message);
    }

    /**
     * Asserts that a string ends not with a given suffix.
     */
    protected function assertStringEndsNotWith(string $suffix, string $string, string $message = '')
    {
        TestCase::assertStringEndsNotWith($suffix, $string, $message);
    }

    /**
     * Asserts that a string ends with a given suffix.
     */
    protected function assertStringEndsWith(string $suffix, string $string, string $message = '')
    {
        TestCase::assertStringEndsWith($suffix, $string, $message);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file.
     */
    protected function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '')
    {
        Assert::assertStringEqualsFile($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file (canonicalizing).
     */
    protected function assertStringEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '')
    {
        Assert::assertStringEqualsFileCanonicalizing($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file (ignoring case).
     */
    protected function assertStringEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '')
    {
        Assert::assertStringEqualsFileIgnoringCase($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that a string matches a given format string.
     */
    protected function assertStringMatchesFormat(string $format, string $string, string $message = '')
    {
        Assert::assertStringMatchesFormat($format, $string, $message);
    }

    /**
     * Asserts that a string matches a given format file.
     */
    protected function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '')
    {
        Assert::assertStringMatchesFormatFile($formatFile, $string, $message);
    }

    protected function assertStringNotContainsString(string $needle, string $haystack, string $message = '')
    {
        TestCase::assertStringNotContainsString($needle, $haystack, $message);
    }

    protected function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = '')
    {
        TestCase::assertStringNotContainsStringIgnoringCase($needle, $haystack, $message);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file.
     */
    protected function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '')
    {
        Assert::assertStringNotEqualsFile($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file (canonicalizing).
     */
    protected function assertStringNotEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '')
    {
        Assert::assertStringNotEqualsFileCanonicalizing($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file (ignoring case).
     */
    protected function assertStringNotEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '')
    {
        Assert::assertStringNotEqualsFileIgnoringCase($expectedFile, $actualString, $message);
    }

    /**
     * Asserts that a string does not match a given format string.
     */
    protected function assertStringNotMatchesFormat(string $format, string $string, string $message = '')
    {
        Assert::assertStringNotMatchesFormat($format, $string, $message);
    }

    /**
     * Asserts that a string does not match a given format string.
     */
    protected function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = '')
    {
        Assert::assertStringNotMatchesFormatFile($formatFile, $string, $message);
    }

    /**
     * Asserts that a string starts not with a given prefix.
     */
    protected function assertStringStartsNotWith(string $prefix, string $string, string $message = '')
    {
        Assert::assertStringStartsNotWith($prefix, $string, $message);
    }

    /**
     * Asserts that a string starts with a given prefix.
     */
    protected function assertStringStartsWith(string $prefix, string $string, string $message = '')
    {
        Assert::assertStringStartsWith($prefix, $string, $message);
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @param mixed $value
     */
    protected function assertThat($value, PHPUnitConstraint $constraint, string $message = '')
    {
        Assert::assertThat($value, $constraint, $message);
    }

    /**
     * Asserts that a condition is true.
     *
     * @param mixed $condition
     */
    protected function assertTrue($condition, string $message = '')
    {
        Assert::assertTrue($condition, $message);
    }

    /**
     * Asserts that two XML files are equal.
     */
    protected function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '')
    {
        Assert::assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that two XML files are not equal.
     */
    protected function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '')
    {
        Assert::assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message);
    }

    /**
     * Asserts that two XML documents are equal.
     *
     * @param \DOMDocument|string $actualXml
     */
    protected function assertXmlStringEqualsXmlFile(string $expectedFile, $actualXml, string $message = '')
    {
        Assert::assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message);
    }

    /**
     * Asserts that two XML documents are equal.
     *
     * @param \DOMDocument|string $expectedXml
     * @param \DOMDocument|string $actualXml
     */
    protected function assertXmlStringEqualsXmlString($expectedXml, $actualXml, string $message = '')
    {
        Assert::assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message);
    }

    /**
     * Asserts that two XML documents are not equal.
     *
     * @param \DOMDocument|string $actualXml
     */
    protected function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = '')
    {
        Assert::assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message);
    }

    /**
     * Asserts that two XML documents are not equal.
     *
     * @param \DOMDocument|string $expectedXml
     * @param \DOMDocument|string $actualXml
     */
    protected function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = '')
    {
        Assert::assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message);
    }

    /**
     * Fails a test with the given message.
     */
    protected function fail(string $message = '')
    {
        Assert::fail($message);
    }

    /**
     * Mark the test as incomplete.
     */
    protected function markTestIncomplete(string $message = '')
    {
        Assert::markTestIncomplete($message);
    }

    /**
     * Mark the test as skipped.
     */
    protected function markTestSkipped(string $message = '')
    {
        Assert::markTestSkipped($message);
    }
}

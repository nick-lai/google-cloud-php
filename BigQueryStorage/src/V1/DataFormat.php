<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use UnexpectedValueException;

/**
 * Data format for input or output data.
 *
 * Protobuf type <code>google.cloud.bigquery.storage.v1.DataFormat</code>
 */
class DataFormat
{
    /**
     * Generated from protobuf enum <code>DATA_FORMAT_UNSPECIFIED = 0;</code>
     */
    const DATA_FORMAT_UNSPECIFIED = 0;
    /**
     * Avro is a standard open source row based file format.
     * See https://avro.apache.org/ for more details.
     *
     * Generated from protobuf enum <code>AVRO = 1;</code>
     */
    const AVRO = 1;
    /**
     * Arrow is a standard open source column-based message format.
     * See https://arrow.apache.org/ for more details.
     *
     * Generated from protobuf enum <code>ARROW = 2;</code>
     */
    const ARROW = 2;

    private static $valueToName = [
        self::DATA_FORMAT_UNSPECIFIED => 'DATA_FORMAT_UNSPECIFIED',
        self::AVRO => 'AVRO',
        self::ARROW => 'ARROW',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
